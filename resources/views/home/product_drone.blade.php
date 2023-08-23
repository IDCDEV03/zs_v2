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

              @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <b>{{ session('success') }}</b>
                    </div>
                @endif

                <div class="card card-default card-md bg-white card-bordered">
                    <div class="card-header">
                       <h6>หลักสูตรเรียน Drone</h6>
                    </div>
                    <div class="card-body">
                       <div class="card-content">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อหลักสูตร</th>
                                <th scope="col">ชั่วโมงหลักสูตร</th>
                                <th scope="col">ราคา</th>
                              </tr>
                            </thead>
                            <tbody>

                              @php
                                  $i ='1';
                              @endphp
@foreach ($drone_list as $item)
    

                              <tr>
                                <th scope="row">@php
                                    echo $i++;
                                @endphp</th>
                                <td><a href="{{route('home.drone_detail',['id' => $item->drone_id])}}">
                                  {{$item->drone_course}}
                                </a></td>
                                <td>{{$item->drone_desc}}</td>
                                <td>{{number_format($item->drone_price)}}</td>
                              </tr>
@endforeach                        
                            </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
<br>
                 <div class="card card-default card-md bg-white card-bordered">
                  <div class="card-header">
                     <h6>สินค้า Drone</h6>
                  </div>
                  <div class="card-body">
                     <div class="card-content">

                      <div class="row">
                        @foreach ($drone_sale as $row)
                        <div class="col-md">
                          <a href="{{route('home.drone_agras',['id' => $row->d_id])}}">
                          <img src="{{asset($row->d_cover)}}" alt="img"  class="w-100 radius-xl">
                        </a>
                        </div>
                        @endforeach
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
