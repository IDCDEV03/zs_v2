<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives Company</title>

    @include('layouts_admin.header')
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
        @include('layouts_admin.head')

        <div class="contents">

            <div class="container-fluid p-3">
                <div class="card card-horizontal card-default card-md mb-3 ">
                    <div class="card-header">
                        <h6>หลักสูตร Drone</h6>
                     </div>
                    <div class="card-body py-md-30">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อหลักสูตร</th>
                                <th>รายละเอียด</th>
                                <th>ตั้งค่า</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = '1';
                                @endphp
                             @foreach ($drone_list as $item)
                                <tr>
                                <th scope="row">@php
                                    echo $i++;
                                @endphp</th>
                                <td>{{$item->drone_course}}</td>  
                                <td>{{$item->drone_desc}} / ราคา {{number_format($item->drone_price)}} บาท</td>     
                                <td>   <a href="#">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    </a></td>        
                              </tr>    
                              @endforeach                       
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>

    <!-----------------------------footer------------------------>
    @include('layouts_admin.footer')   
    </main>
  
    @include('layouts_admin.script')
 


</body>

</html>
