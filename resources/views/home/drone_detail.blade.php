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
                     <span>รายละเอียดหลักสูตร</span>
                  </div>
                  <div class="card-body">
                     <div class="card-content">
@foreach ($drone_detail as $row)          
<ul>
    <li><h4>{{$row->drone_course}}</h4></li>
    <li><i class="las la-angle-double-right"></i>{{$row->drone_desc}}</li>
</ul>

<br>

<div class="alert-big alert alert-info" role="alert">
    <div class="alert-icon">
        <img src="{{asset('theme/img/svg/download.svg')}}" alt="download" class="svg">
     </div>
    <div class="alert-content">  
       <h3><a href="{{asset($row->drone_file)}}" target="_blank">รายละเอียดหลักสูตร</a></h3>
    </div>
 </div>

 <div class="dm-collapse mt-20">
    <div class="dm-collapse-item">
       <div class="dm-collapse-item__header">
          <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-1" aria-expanded="false">
             <i class="la la-angle-right"></i>
             <h4>ติดต่อสอบถามเพิ่มเติม</h4>
          </a>
       </div>
       <div id="collapse-body-1" class="collapse dm-collapse-item__body">
          <div class="collapse-body-text">
             <p>
              <ul>
                <li><i class="fa fa-phone-square" aria-hidden="true"></i> : 093-408-3377 , 099-704-0811 </li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i> : <a href="mailto:contact@iddrives.co.th">contact@iddrives.co.th</a></li>
              </ul>
             </p>
          </div>
       </div>
    </div>
   </div>
   <hr>
<form action="{{route('home.drone_sub')}}" method="POST">
    @csrf
<input type="hidden" name="drone_id" value="{{$row->drone_id}}">
<input type="hidden" name="member_id" value="{{Auth::user()->member_id}}">
    <div class="mb-3 mt-20">
        <label for="car2" class="form-label">สนใจสมัครหลักสูตร</label>
        <input type="text" class="form-control" id="car2" placeholder="ระบุเบอร์โทรศัพท์" maxlength="10" name="user_phone" required>        
      </div>
      
      <div class="mb-3">
        <label for="car2" class="form-label">ช่วงเวลาที่สะดวกให้ติดต่อกลับ</label>
        <input type="text" class="form-control" name="user_timing" required>       
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="user_chk" value="1" required>
        <label class="form-check-label" for="exampleCheck1">ยืนยันการสมัครหลักสูตร</label>     
      </div>
      <button type="submit" class="btn btn-success">บันทึก</button>
 </form>
 @endforeach
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
