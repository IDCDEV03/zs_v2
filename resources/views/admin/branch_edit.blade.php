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
                    <div class="card-header">
                        <h6>แก้ไขข้อมูลสาขา</h6>
                     </div>
                    <div class="card-body">

                        <form action="{{route('admin.branch_update')}}" method="POST">
                            @csrf
                            @foreach ($b_edit as $item)
                            <input type="hidden" name="b_id" value="{{$item->branch_id}}">  
                            <div class="form-group">
                               <label for="a11" class="il-gray align-center mb-10">จังหวัด</label>
                               <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a11" value="{{$item->branch_province}}" name="b_province">
                            </div>
                       
                            <div class="form-group">
                                <label for="a12" class="il-gray align-center mb-10">ชื่อสาขา</label>
                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a12" value="{{$item->branch_name}}" name="b_name">
                             </div>                         

                            <div class="form-group form-element-textarea mb-20">
                               <label for="e1" class="il-gray  align-center mb-10">ที่อยู่</label>
                               <textarea class="form-control" name="b_address" id="e1" rows="3">
                                {{$item->branch_address}}
                               </textarea>
                            </div>

                            <div class="form-group">
                                <label for="a13" class="il-gray align-center mb-10">Link Facebook</label>
                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="b_fb" id="a13" value="{{$item->branch_fb}}">
                             </div>     
                             
                             <div class="form-group">
                                <label for="a14" class="il-gray align-center mb-10">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="b_phone" id="a14" value="{{$item->branch_phone}}">
                             </div> 
                             
                             <div class="form-group">
                                <label for="a15" class="il-gray align-center mb-10">อีเมลสาขา</label>
                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="b_email" id="a15" value="{{$item->branch_email}}">
                             </div>                        
                      
                             <div class="form-group">
                                <label for="a17" class="il-gray align-center mb-10">ช่องทางติดต่ออื่นๆเพิ่มเติม</label>
                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a17" value="{{$item->branch_other}}" name="b_other">
                             </div>                         

                             <div class="form-group mb-10">
                                <button type="submit" class="btn btn-primary btn-default btn-squared btn-shadow-primary fs-16">บันทึก
                                </button>
                                </div> 

                             @endforeach
                         </form>

                    </div>
                 </div>
                 <!-- ends: .card -->


            </div>
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts_admin.footer')   
    </main>
  

    @include('layouts_admin.script')
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
