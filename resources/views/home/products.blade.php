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



                <div class="card">
                    <div class="card-body">
                        <div class="bd-example01-row">
                        <div class="bd-example">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{route('home.products_dl')}}">
                                            <img class="img-fluid" src="{{asset('theme/img/card05.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="col-sm">
                                    <a href="{{route('home.tz_list')}}">
                                        <img class="img-fluid" src="{{asset('theme/img/menu_tz.png')}}" alt="img">
                                    </a>
                                    </div>
                                    
                                    <div class="col-sm">
                                        <a href="{{route('home.drone')}}">
                                        <img class="img-fluid" src="{{asset('theme/img/menu_drone.png')}}" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
