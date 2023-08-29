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
                                <li class="nav-item">
                                   <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">เพิ่ม/ลบ สาขา</a>
                                </li>
                               
                             </ul>
                             <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                    <form action="{{route('admin.dl_course_update')}}" method="post" enctype="multipart/form-data">   
                                        @csrf                                              
                                    @foreach ($dl_types as $row) 
                                    <input type="hidden" name="dl_code" value="{{$row->dl_code}}">
            
                                    <div class="form-group">                          
                                        <div class="col-md-12 mb-2">                              
                                            <img id="preview-image-before-upload" src="{{asset($row->dl_cover)}}"
                                                alt="preview image" style="max-height: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="img_cover">เปลี่ยนภาพปก <small>(ขนาด 800x800px)</small>
                                            </label>
                                            <input type="file" class="form-control"  name="dl_cover" id="img_cover"  accept="image/*" required>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="a1" class="il-gray fw-500 align-center mb-10">ชื่อหลักสูตร</label>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="dl_course_name" value="{{$row->dl_course_name}}">
                                     </div>
            
                                    <div class="form-group">
                                        <label for="a13" class="il-gray fw-500 align-center mb-10">รายละเอียดหลักสูตร</label>
                                    <textarea class="form-control" name="dl_detail" id="summernote" rows="3">
                                        {{$row->dl_detail}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="a1" class="il-gray  fw-500 align-center mb-10">ราคาเรียน</label>
                                        <input type="number" class="form-control ih-medium ip-light radius-xs b-light px-15" name="dl_price" id="a1" placeholder="ระบุเฉพาะตัวเลข" value="{{$row->dl_price}}" required>
                                     </div>
            
                                     <div class="form-group">
                                        <label for="a2" class="il-gray  fw-500 align-center mb-10">หมายเหตุ </label>
                                        <input type="text" name="dl_other" class="form-control ih-medium ip-light radius-xs b-light px-15" value="{{$row->dl_other}}">
                                     </div>
                                     @endforeach

                                     <div class="form-group mb-10">
                                        <button type="submit" class="btn btn-success btn-submit">บันทึก</button>
                                     </div>
                              
                                </form>  

                                </div>
                                <!---tab1_end--->

                                <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                                 
                                    <div class="list-box">
                                        <ul>
                                           <li class="list-box__item">สาขาที่เปิดหลักสูตร</li>
                                           
                                         @foreach ($dl_branch as $item)           
                                            <li class="list-box__item">
                                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> {{$item->branch_name}}
                                               
                                            <form method="POST" action="{{ route('admin.del_branch', $item->id) }}" id="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-default btn-squared btn-transparent-danger btn-sm" onclick="return confirmDelete()">ลบ
                                                </button>
                                            </form>
                                            </li>
                                          @endforeach
                                        </ul>
                                    </div>

                                    <br>
                                         
                                    <div class="list-box">
                                        <ul>
                                           <li class="list-box__item">เพิ่มสาขา</li>
                                           <form action="{{route('admin.add_branch')}}" method="POST">
                                            @csrf
                                         @foreach ($dl_branch_notin as $item)           
                                         <input type="hidden" value="{{$id}}" name="dl_type">
                                            <li class="list-box__item">
                                    <div class="radio-vertical-list">
                                          <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="dl_branch" value="{{$item->branch_id}}" id="radio-vl-{{$item->id}}">
                                                    <label for="radio-vl-{{$item->id}}">
                                                        <span class="radio-text"> {{$item->branch_name}} 
                                                        </span>
                                                    </label>
                                                </div>
                                           </div>
                                        </li>
                                          @endforeach
                                        </ul>                                       
                                    </div>
                                  <br>
                              
                                      <div class="form-group mb-10">
                                        <button type="submit" class="btn btn-info btn-default btn-squared btn-transparent-info">บันทึก
                                        </button>
                                        </div>                                  
                     
                                </form>
                             


                                </div>
                               

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
    <script>
        function confirmDelete() {
            return confirm("ต้องการนำสาขานี้ออกใช่หรือไม่?");
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function (e) {
                $('#img_cover').change(function(){
                            let reader = new FileReader();
                 reader.onload = (e) => { 
                   $('#preview-image-before-upload').attr('src', e.target.result); 
            }
                 reader.readAsDataURL(this.files[0]); 
                  });
        });
    
        </script>

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
