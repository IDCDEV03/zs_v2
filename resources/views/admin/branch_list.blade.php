<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives</title>

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
@php
    $i = '1';
@endphp
        <div class="contents">

            <div class="container-fluid p-3">

                <div class="card card-horizontal card-default card-md mb-3 ">
                    <div class="card-header color-dark fw-500">
                        รายชื่อสาขาโรงเรียน
                     </div>
                    <div class="card-body">     
                        
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <div class="alert-content">
                            <b>{{ session('success') }}</b>
                            </div>
                        </div>
                        @endif  

                        <div class="table4 p-25 mb-30">
                            <div class="table-responsive">
                               <table class="table mb-0">
                                  <thead>
                                     <tr class="userDatatable-header">
                                        <th>
                                           <span class="userDatatable-title">#</span>
                                        </th>
                                        <th>
                                           <span class="userDatatable-title">ชื่อสาขา</span>
                                        </th>
                                        <th>
                                           <span class="userDatatable-title">จังหวัด</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">ตั้งค่า</span>
                                         </th>
                                     </tr>
                                  </thead>
                                  <tbody>
 
                                    @foreach ($dl_list as $item)
                                  
                                     <tr>
                                        <td>
                                           <div class="userDatatable-content">
                                              @php
                                                  echo $i++;
                                              @endphp
                                           </div>
                                        </td>
                                        <td>
                                           <div class="userDatatable-content">
                                             {{$item->branch_name}}
                                           </div>
                                        </td>
                                        <td>
                                           <div class="userDatatable-content">
                                            {{$item->branch_province}}
                                           </div>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.branch_edit',['id' => $item->branch_id])}}">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                            </a>
                                        </td>
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



    <!-----------------------------footer------------------------>
    @include('layouts_admin.footer')   
    </main>
  

    @include('layouts_admin.script')
 


</body>

</html>
