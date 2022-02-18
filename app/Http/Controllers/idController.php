<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class idController extends Controller
{
    public function index(Request $request)
    {
        $date = User::distinct()->get(['dateofissue']);
        return view('job' , compact('date'));
    }
    public function create(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'fname'=> 'required',
            'lname' => 'required',
            'email' => 'required |email|unique:users,email',
            'inputPhone' => 'required',
            'lga' => 'required',
            'gender' => 'required',
            'userprofile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
        ]);

        if(!$validate->passes()){
            return response()->json(['code'=>0 , 'error'=>$validate->errors()->toArray()]);
            exit();
        }
        $file = $request->file('userprofile');
        $new_name = 'prymd'.date('Ymd').uniqid().'.jpg';
        $upload = $file->move(public_path('images/userpics'), $new_name);
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'inputPhone' => $request->inputPhone,
            'gender' => $request->gender,
            'lga' => $request->lga,
            'dateofissue' => $request->dateofissue,
            'userprofile' => $new_name,
        ];
        $create = User::create($data);
        if($create){
            return response()->json(['code'=>1 , 'msg'=>'Id created successfully']);
        }else{
            return response()->json(['code'=>0 , 'msg'=>'error creating id, call bube']);
        }
    }
    public function idtables(Request $request)
    {
        if($request->has('date')){
            $date =  $request->date;
            $current_timestamp = Carbon::now()->toDateTimeString();
            $data = User::where('dateofissue', $date )->paginate(10);
        }
        $current_timestamp = Carbon::now()->toDateTimeString();
        //$data = User::where("created_at", "like", "%{$current_timestamp}%")->paginate(10);
        $data = User::orderBy('created_at', 'DESC')->paginate(10);
        //dd($data);
        return view('cards' , compact('data'));
    }

    public function sortby(Request $request)
    {
        $date =  $request->date;
        $data = User::where('dateofissue', $date )->paginate(10);
        return view('cards' , compact('data'));
    }
}
