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
                     
                  <div class="card card-default card-md bg-white card-bordered">
                    <div class="card-header">
                       <h6>หลักสูตร TrainingZenter ฝึกอบรม</h6>
                    </div>
                    <div class="card-body">
                       <div class="card-content">
                        <table class="table table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อหลักสูตร</th>
                                <th scope="col">ทฤษฎี</th>
                                <th>ปฏิบัติ</th>
                                <th scope="col">ราคา</th>
                              </tr>
                            </thead>
                            <tbody>

                              @php
                                  $i ='1';
                              @endphp
@foreach ($tz_group as $item)    
                              <tr>
                                <th scope="row">@php
                                    echo $i++;
                                @endphp</th>
                                <td><a href="{{route('home.tz_detail', ['id' => $item->tz_id])}}">
                                  {{$item->tz_name}} ({{$item->tz_fullname}})
                                </a>                          
                                </td>
                                <td>
                                    @if ($item->tz_theory == '1')
                                   <span class="text-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    @else
                                    <i class="las la-minus"></i>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tz_practical == '1')
                                    <span class="text-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                                     @else
                                     <i class="las la-minus"></i>
                                     @endif
                                </td>
                                <td>{{number_format($item->tz_price)}}/ท่าน</td>
                              </tr>
@endforeach                        
                            </tbody>
                          </table>
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
