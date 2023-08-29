<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives Company</title>

    @include('layouts_admin.header')
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

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
                       <h6> แก้ไขข้อมูลหลักสูตร</h6>
                    </div>
                    <div class="card-body">
                       <div class="tab-wrapper">

                          <div class="dm-tab tab-horizontal">
                             <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                <li class="nav-item">
                                   <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">แก้ไขรายละเอียดหลักสูตร</a>
                                </li>
                              
                               
                             </ul>
                             <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                    <form action="{{route('admin.tz_update')}}" method="post">   
                                    @csrf    
                                    @foreach ($tz_edit as $row) 
                                    <input type="hidden" name="tz_id" value="{{$row->tz_id}}">
                                    <div class="form-group">
                                        <label for="a1" class="il-gray fw-500 align-center mb-10">ชื่อหลักสูตร</label>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="tz_name" value="{{$row->tz_name}}">
                                     </div>

                                     <div class="form-group">
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="tz_fullname" value="{{$row->tz_fullname}}">
                                     </div>
            
                                

                                    <div class="form-group">
                                        <label for="a1" class="il-gray  fw-500 align-center mb-10">ราคาเรียน</label>
                                        <input type="number" class="form-control ih-medium ip-light radius-xs b-light px-15" name="tz_price" id="a1" placeholder="ระบุเฉพาะตัวเลข" value="{{$row->tz_price}}" required>
                                     </div>

                            <div class="form-group">
                             <label for="a2" class="il-gray  fw-500 align-center mb-10">รูปแบบการอบรม</label>
                              <div class="checkbox-group d-flex">
                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                   <input class="checkbox" name="tz_theory" type="checkbox" id="check-grp-1" value="1" 
                                   @if ($row->tz_theory == '1')
                                       checked               
                                   @endif>
                                   <label for="check-grp-1">
                                      <span class="checkbox-text">ทฤษฎี</span>
                                   </label>
                                </div>

                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                   <input class="checkbox" name="tz_practical" type="checkbox" id="check-grp-2" value="1" 
                                   @if ($row->tz_practical == '1')
                                         checked               
                                    @endif>
                                   <label for="check-grp-2">
                                      <span class="checkbox-text">ปฏิบัติ</span>
                                   </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="a2" class="il-gray  fw-500 align-center mb-10">สถานะการใช้งาน</label>
                             <div class="radio-horizontal-list d-flex">
                      <div class="radio-theme-default custom-radio ">
                                   <input class="radio" type="radio" name="tz_status" value="1" id="radio-vl1"
                                   @if ($row->tz_status == '1')
                                       checked
                                   @endif
                                   >
                                   <label for="radio-vl1">
                                      <span class="radio-text">เปิด</span>
                                   </label>
                        </div>          
                      <div class="radio-theme-default custom-radio ">
                                   <input class="radio" type="radio" name="tz_status" value="0" id="radio-vl2"
                                   @if ($row->tz_status == '0')
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
                                        <input type="text" name="tz_other" class="form-control ih-medium ip-light radius-xs b-light px-15" value="{{$row->tz_other}}">
                                     </div>
                                   
                                     @endforeach

                                     <div class="form-group mb-10">
                                        <button type="submit" class="btn btn-success btn-submit">บันทึก</button>
                                     </div>
                              
                                </form>  

                                </div>
                                <!---tab1_end--->

                               
                               

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
 


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['view', ['codeview']]
          ]
        });
      </script>
</body>

</html>
