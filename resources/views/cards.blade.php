<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"  media="all">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}"  media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"  media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job-2.css') }}"  media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pyramid.css') }}"  media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/print.css') }}"  media="print">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            @forelse ($data as $users)
                <div class="col-md-6 cards">
                    <img class="bg" src="{{ asset('images/card-bg.jpg') }}" alt="">
                    <div class="card-body">
                        <div class="row">
                             @php
                                $email = $users->email;
                                $phone = $users->inputPhone;
                                $name = $users->fname.' '.$users->lname;
                                $qrcontent = 'Name: '.$name.',  Email: '.$email.', Phone: '.$phone;
                                
                            @endphp
                            <table>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/userpics/'.$users->userprofile) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="text">
                                            <p><b >Name: </b> {{ $users->fname }} {{ $users->lname }}</p>
                                            <p><b>L.G.A: </b>{{ $users->lga }}</p>
                                            <p><b>Date of Reg: </b> {{ $users->dateofissue }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <img class="qrcode" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate($qrcontent)) !!} ">
                                    </td>
                                </tr>
                            </table>
                            {{-- <div class="col p-0"><img src="{{ asset('images/userpics/'.$users->userprofile) }}" alt=""></div>
                            <div class="col-md-6 p-0">
                                <div class="text">
                                    <p><b >Name: </b> {{ $users->fname }} {{ $users->lname }}</p>
                                    <p><b>L.G.A: </b>{{ $users->lga }}</p>
                                    <p><b>Date of Reg: </b> {{ $users->dateofissue }}</p>
                                </div>
                            </div>
                            @php
                                $email = $users->email;
                                $phone = $users->inputPhone;
                                $name = $users->fname.' '.$users->lname;
                                $qrcontent = 'Name: '.$name.',  Email: '.$email.', Phone: '.$phone;
                                
                            @endphp
                            <div class="col"><img class="qrcode" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate($qrcontent)) !!} "></div> --}}
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                    {{ $data->links() }}
                </div>
            @empty
                
            @endforelse
            
        </div>
    </div>
</body>
</html>