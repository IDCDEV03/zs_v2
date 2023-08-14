<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives</title>

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

            
                <div class="row">
                    <div class="col-xxl-12 mb-25">
                       <div class="card banner-feature--18 new d-flex bg-white">
                          <div class="container-fluid">
                             <div class="row">
                                <div class="col-xl-6">
                                   <div class="card-body px-25">
                                      <h1 class="banner-feature__heading color-dark">Hey Danial! Welcome to the Dashboard
                                      </h1>
                                      <p class="banner-feature__para color-dark">There are many variations of passages of
                                         Lorem Ipsum available,<br>
                                         ut the majority have suffered passages of Lorem Ipsum available alteration in
                                         some form
                                      </p>                                   
                                   </div>
                                </div>
                                <div class="col-xl-6">
                                   <div class="banner-feature__shape">
                                      <img src="{{asset('theme/img/danial.png')}}" alt="img">
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="bd-example-row">
                        <div class="bd-example">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm"><img class="img-fluid" src="{{asset('theme/img/banner_zs.png')}}" alt="img"></div>
                                    <div class="col-sm">

                                    <a href="{{route('home.products')}}">
                                        <img class="img-fluid" src="{{asset('theme/img/banner_products.png')}}" alt="img">
                                    </a>

                                    </div>
                                    <div class="col-sm"><img class="img-fluid" src="{{asset('theme/img/banner_news.png')}}" alt="img"></div>
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
