<?php

namespace App\Http\Controllers;
use App\Model\Users;
use Carbon\Carbon;

use Illuminate\Http\Request;

class idController extends Controller
{
    public function index(Request $request)
    {
        return view('job');
    }
    public function create(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'fname'=> 'required',
            'lname' => 'required',
            'email' => 'required |email|exists:users,email',
            'inputPhone' => 'required',
            'gender' => 'required',
            'userprofile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
        ]);

        if(!$validate->passes()){
            return response()->json(['code'=>0 , 'error'=>$validate->errors()->toArray()]);
            exit();
        }
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'inputPhone' => $request->inputPhone,
            'gender' => $request->gender,
            'userprofile' => $request->userprofile,
        ];
        $create = User::create($data);
    }
    public function idtables(Request $request)
    {
        if($requst->has('date')){
            $date =  $request('date');
            $current_timestamp = Carbon::now()->toDateTimeString();
            $data = user::where('issued_at', $date )->paginate(10);
        }
        $current_timestamp = Carbon::now()->toDateTimeString();
        $data = User::where('created_at', $current_timestamp)->paginate(10);
        return view('cards' , compact('data'));
    }

    public function sortby(Request $request)
    {
        $date =  $request('date');
        $data = User::where('issued_at', $date )->paginate(10);
        return view('cards' , compact('data'));
    }
}
