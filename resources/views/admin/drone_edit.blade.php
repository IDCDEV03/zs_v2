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

             
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                       <h6> แก้ไขข้อมูลหลักสูตรโดรน</h6>
                    </div>
                    <div class="card-body">
                       <div class="tab-wrapper">

                          <div class="dm-tab tab-horizontal">
                             <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                <li class="nav-item">
                                   <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">แก้ไขรายละเอียดหลักสูตร</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">แก้ไขไฟล์แนบ</a>
                                 </li>
                              
                               
                             </ul>
                             <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                    <form action="{{route('admin.drone_update')}}" method="post">   
                                    @csrf    
                                    @foreach ($drone_edit as $row) 
                                    <input type="hidden" name="drone_id" value="{{$row->drone_id}}">
                                    <div class="form-group">
                                        <label for="a1" class="il-gray fw-500 align-center mb-10">ชื่อหลักสูตร</label>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="drone_course" value="{{$row->drone_course}}">
                                     </div>

                                     <div class="form-group">
                                        <label for="a2" class="il-gray fw-500 align-center mb-10">จำนวนชั่วโมงอบรม</label>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="drone_desc" value="{{$row->drone_desc}}">
                                     </div>          
                                
                                    <div class="form-group">
                                        <label for="a1" class="il-gray  fw-500 align-center mb-10">ราคาเรียน</label>
                                        <input type="number" class="form-control ih-medium ip-light radius-xs b-light px-15" name="drone_price" id="a1" placeholder="ระบุเฉพาะตัวเลข" value="{{$row->drone_price}}" required>
                                     </div>

                      
                            <div class="form-group">
                                <label for="a2" class="il-gray  fw-500 align-center mb-10">สถานะการใช้งาน</label>
                             <div class="radio-horizontal-list d-flex">
                      <div class="radio-theme-default custom-radio ">
                                   <input class="radio" type="radio" name="drone_active" value="1" id="radio-vl1"
                                   @if ($row->drone_active == '1')
                                       checked
                                   @endif
                                   >
                                   <label for="radio-vl1">
                                      <span class="radio-text">เปิด</span>
                                   </label>
                        </div>          
                      <div class="radio-theme-default custom-radio ">
                                   <input class="radio" type="radio" name="drone_active" value="0" id="radio-vl2"
                                   @if ($row->drone_active == '0')
                                   checked
                                       @endif>
                                   <label for="radio-vl2">
                                      <span class="radio-text">ปิด</span>
                                   </label>
                                </div>
                            </div>
                             </div>

                                     <div class="form-group">
                                        <label for="a2" class="il-gray  fw-500 align-center mb-10">หมายเหตุ </label>
                                        <input type="text" name="drone_detail" class="form-control ih-medium ip-light radius-xs b-light px-15" value="{{$row->drone_detail}}">
                                     </div>
                                   
                                     @endforeach

                                     <div class="form-group mb-10">
                                        <button type="submit" class="btn btn-success btn-submit">บันทึก</button>
                                     </div>
                              
                                </form>  

                                </div>
                                <!---tab1_end--->   
            
            
                        <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">

                            <div class="alert-big alert alert-warning" role="alert">
                                <div class="alert-icon">
                                    <i class="las la-file-pdf"></i> 
                                 </div>
                            <div class="alert-content">  
                                <a href="{{asset($row->drone_file)}}" target="_blank">{{$row->drone_file}}</a>
                                <a href="#" class="btn btn-sm btn-danger">ลบไฟล์</a>
                             </div>
                            </div>
                            

                        </div>
                        <!---tab2_end---> 

                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- ends: .card -->





            </div>
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts_admin.footer')   
    </main>
  

    @include('layouts_admin.script')
 


</body>

</html>
