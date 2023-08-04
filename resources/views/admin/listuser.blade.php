<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives</title>

    @include('layouts_admin.header')
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
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
                        <h3 class="card-title py-md-10">รายชื่อสมาชิก</h3>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>อาชีพ</th>
                                    <th>วันที่สมัคร</th>
                                    <th>ตั้งค่า</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = '1';
                                @endphp
                                @foreach ($inf_p1 as $item)
                                <tr>
                                    <td>@php
                                        echo $i++;
                                    @endphp</td>
                                    <td> {{$item->member_prefix}} {{$item->member_name}} {{$item->member_lastname}} </td>
                                    <td> {{$item->member_phone}} </td>
                                    <td> {{$item->member_career}} </td>
                                    <td> {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }} 
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.memberdetail', ['id' => $item->member_id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        |&nbsp;<span style="color: red"><i class="fa fa-trash" aria-hidden="true"></i>
                                    </span>
                                    </td>
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
    <script src="{{asset('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(function(){
            $("#example").dataTable(
                {
                    "pageLength": 10,
                    "language": {
                        "info":"แสดงผล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                        "search":"ค้นหา:",
                        "lengthMenu":"แสดงผล _MENU_ รายการ",
                        "zeroRecords":"ไม่พบข้อมูล",
                        "paginate": {
                            "next":"ต่อไป",
                            "previous":"ก่อนหน้า"
                        }
                    }
                });
        });
    </script>
</body>

</html>
