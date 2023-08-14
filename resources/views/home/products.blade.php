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
                        <div class="horizontal-form">
                            <div class="col-12">
                    <div class="mb-25">                                 
                        <div class="container-fluid">
                            <div class="row justify-content-md-center"> 

                                <div class="col-md-auto">
                                    <a href="{{route('home.products_dl')}}">
                                <img src="{{asset('theme/img/card05.jpg')}}" class="rounded mx-auto d-block img-fluid" width="400px">

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
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts.footer')   
    </main>
  

    @include('layouts.script')
 


</body>

</html>
