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
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <b>{{ session('success') }}</b>
                        </div>
                    @endif
                        <div class="tab-wrapper">

                            <div class="dm-tab tab-horizontal">
                               <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                  <li class="nav-item">
                                     <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">เรียนขับรถ
                                        <span class="badge badge-round badge-danger badge-lg">
                                            {{$drives_count}} 
                                         </span>
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">TZ
                                        <span class="badge badge-round badge-danger badge-lg">
                                               {{$tz_count}}        
                                         </span>
                                     </a>
                                    
 
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link" id="tab-v-3-tab" data-bs-toggle="tab" href="#tab-v-3" role="tab" aria-selected="false">Drone
                                        <span class="badge badge-round badge-danger badge-lg">
                                           {{$drone_count}}
                                         </span>
                                     </a>
                                  </li>



                               </ul>
                               <div class="tab-content">


 <!----------------------Tab1-------------------------->
                                  <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                            
        <div class="table-responsive">
            <h3>สมาชิกสนใจเรียนขับรถ</h3>
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
        <th></th>                                     
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
                <td>  
                     <button class="btn btn-icon btn-circle color-primary btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-basic-{{$item->user_id}}">
                    <img src="{{asset('theme/img/svg/edit.svg')}}" alt="layers" class="svg">
                    </button>

                    <div class="modal-basic modal fade show" id="modal-basic-{{$item->user_id}}" tabindex="-1" role="dialog" aria-hidden="true">


                        <div class="modal-dialog modal-md" role="document">
                           <div class="modal-content modal-bg-white ">
                              <div class="modal-header">
                      
                                 <h6 class="modal-title">ลูกค้าที่สนใจสมัครหลักสูตร</h6>
                                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <img src="{{asset('theme/img/svg/x.svg')}}" alt="x" class="svg">
                                 </button>
                              </div>
                              <div class="modal-body">
                                
  <form action="{{route('admin.status_update')}}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{$item->user_id}}">

                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">ชื่อลูกค้า</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" 
                                      value="{{$item->member_name}}">
                                    </div>
                                  </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" 
                                      value="{{$item->user_phone}}">
                                    </div>
                                  </div>

                                  
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">ช่วงเวลาที่สะดวกให้ติดต่อ</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" 
                                      value="{{$item->user_timing}}">
                                    </div>
                                  </div>

                                  <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">หลักสูตรที่สนใจ</label>
                                    <div class="col-sm-8">
                                      <span>  {{$item->dl_course_name}} <br>
                                        สาขา {{$item->branch_name}} <br> (จ.{{$item->branch_province}}) </span>
                                    </div>
                                  </div>

                                  <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label text-primary">อัพเดทสถานะ</label>
                                    <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status_update" value="1" id="flexRadioDefault1">
                                        <label class="form-check-label text-success" for="flexRadioDefault1">
                                          ติดต่อเข้ารับบริการแล้ว
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status_update" value="2" id="flexRadioDefault2">
                                        <label class="form-check-label text-danger" for="flexRadioDefault2">
                                          ยกเลิกการรับบริการ
                                        </label>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">*หมายเหตุ</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="admin_remark" class="form-control">
                                    </div>
                                  </div>

                                

                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
                                 <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">ยกเลิก</button>
                              </div>
                            </form>
                           </div>
                        </div>
            
            
                     </div>
                     <!-- ends: .modal-Basic -->

                </td>
                </tbody>
                @endforeach      
            </table>
                                    </div>
                                  </div>
<!----------------------Tab2-------------------------->
                                  <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                                   
    <div class="table-responsive"> <h3>สมาชิกสนใจหลักสูตร TZ</h3>
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
                    <th></th>                                     
                </tr>
            </thead>
            @php
            $i = '1';
        @endphp
        @foreach ($user_sub_tzs as $row)   
            <tbody>
            
            <td>
                    @php
                        echo $i++;
                    @endphp 
            </td>
            <td>
                {{$row->member_name}}
            </td>
            <td>{{$row->user_phone}}
            <br>ช่วงเวลาที่สะดวกให้ติดต่อกลับ<br> {{$row->user_timing}}
            </td>
            <td> {{$row->tz_name}} <br>
                ({{$row->tz_fullname}}) <br> 
            </td>
            <td>  {{ Carbon\Carbon::parse($row->created_at)->format('d/m/Y H:i') }}</td>
            <td>
                @if ($row->tz_sub_status == '0')
            <span class="dm-tag tag-primary tag-transparented">รอเจ้าหน้าที่ติดต่อกลับ</span>
                @elseif ($row->tz_sub_status == '1')
            <span class="dm-tag tag-success tag-transparented">ได้รับบริการเรียบร้อยแล้ว</span>
                @elseif ($row->tz_sub_status == '2')
            <span class="dm-tag tag-danger tag-transparented">ยกเลิกการรับบริการ</span>
                @endif
            </td>
            <td>
                <button class="btn btn-default btn-rounded color-primary btn-outline-primary " data-bs-toggle="modal" data-bs-target="#modal-basic">
                <i class="fa fa-cog" aria-hidden="true"></i>
                </button>
           
            </td>
            </tbody>
            @endforeach      
        </table>
    </div>

                        
                                  </div>
 <!----------------------Tab3-------------------------->
                                  <div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                                     <h3>สมาชิกสนใจหลักสูตร Drone</h3>
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
    @include('layouts_admin.footer')   
    </main>
  

    @include('layouts_admin.script')
 


</body>

</html>
