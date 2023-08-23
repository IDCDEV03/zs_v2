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

                <div class="card card-default card-md bg-white card-bordered">
                    <div class="card-header">
                       <h6>สถานะการสมัคร</h6>
                    </div>
                   
                    <div class="card-body">
                        <div class="tab-wrapper">

                           <div class="dm-tab tab-horizontal">
                              <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                 <li class="nav-item">
                                    <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">สมัครเรียนขับรถ</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">สมัครหลักสูตรโดรน</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="tab-v-3-tab" data-bs-toggle="tab" href="#tab-v-3" role="tab" aria-selected="false">สมัครอบรม</a>
                                 </li>

                              </ul>
                              <div class="tab-content">

                                 <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                   

                                 </div>
                                 <!--end_Tab1-->

                                 <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                              
                                    <table class="table table-responsive">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">หลักสูตรที่สมัคร</th>
                                            <th scope="col">สถานะ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                      @foreach ($user_status as $item)                          
                                          
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>{{$item->drone_course}}</td>
                                            <td>
                                                @if ($item->sub_status == '0')
                                                <span class="dm-tag tag-primary tag-transparented">รอเจ้าหน้าที่ติดต่อกลับ</span>
                                                @elseif ($item->sub_status == '1')
                                                <span class="dm-tag tag-success tag-transparented">ได้รับบริการเรียบร้อยแล้ว</span>
                                                @elseif ($item->sub_status == '2')
                                                <span class="dm-tag tag-danger tag-transparented">ยกเลิกการรับบริการ</span>
                                                @endif

                                            </td>
                                          </tr>
                      @endforeach                  
                                        </tbody>
                                      </table>

                                 </div>
                                  <!--end_Tab2-->

                                 <div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                             
                                    

                                 </div>
                                  <!--end_Tab3-->
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
