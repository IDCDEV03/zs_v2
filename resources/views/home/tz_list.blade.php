<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives Company</title>

    @include('layouts.header')
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body class="layout-light top-menu">

    <div class="mobile-author-actions"></div>

    <main class="main-content">
        @include('layouts.head')

        <div class="contents">

            <div class="container-fluid p-3">

                <div class="card card-horizontal card-default card-md mb-3 ">
                   
                    <div class="card-body py-md-30">
                        <div class="row">
                            @foreach ($tz_list as $row)

                            <div class="col-md">
                                <div class="card">     
                                    <div class="gc">
                                        <div class="gc__img">
                                            <a href="{{route('home.tz_group',['id' => $row->tz_group_id])}}">
                                            <img src="{{asset($row->tz_group_cover)}}" alt="img" class="w-100 radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-25 py-20">
                                            <div class="gc__title">
                                                <P>{{$row->tz_group_name}}</P>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>                            
                            
                              @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts.footer')   
    </main>
  

    @include('layouts.script')
 
</body>
</html>
