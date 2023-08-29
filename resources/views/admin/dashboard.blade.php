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
                   
                    <div class="card-body py-md-30">
                        <div class="table-responsive">
                            <table class="table mb-0">
                               <thead>
                                  <tr class="userDatatable-header">
                                     <th>
                                        <span class="userDatatable-title">#</span>
                                     </th>
                                     <th>ชื่อ</th>
                                     <th>เบอร์โทร</th>
                                     <th>
                                        <span class="userDatatable-title">หลักสูตรที่สนใจ</span>
                                     </th>
                                     <th>
                                        <span class="userDatatable-title">สมัครเมื่อ</span>
                                     </th>
                                     <th>
                                         <span class="userDatatable-title">สถานะ</span>
                                      </th>
                                  </tr>
                               </thead>
                               @php
                               $i = '1';
                           @endphp
                           @foreach ($user_sub_driv as $item)   
                               <tbody>
                              
                                <td>
                                       @php
                                           echo $i++;
                                       @endphp 
                                </td>
                                <td>
                                    {{$item->member_name}}
                                </td>
                                <td>{{$item->user_phone}}
                                <br>ช่วงเวลาที่สะดวกให้ติดต่อกลับ<br> {{$item->user_timing}}
                                </td>
                                <td> {{$item->dl_course_name}} <br>
                                    สาขา {{$item->branch_name}} <br> (จ.{{$item->branch_province}})
                                </td>
                                <td>  {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</td>
                                <td>
                                    @if ($item->sub_status == '0')
                                    <span class="dm-tag tag-primary tag-transparented">รอเจ้าหน้าที่ติดต่อกลับ</span>
                                    @elseif ($item->sub_status == '1')
                                    <span class="dm-tag tag-success tag-transparented">ได้รับบริการเรียบร้อยแล้ว</span>
                                    @elseif ($item->sub_status == '2')
                                    <span class="dm-tag tag-danger tag-transparented">ยกเลิกการรับบริการ</span>
                                    @endif
                                </td>
                                                  
                               </tbody>
                               @endforeach      
                            </table>
                        </div>
                    </div>
             

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
