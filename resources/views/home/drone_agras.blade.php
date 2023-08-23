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
                     <span>รายละเอียดสินค้า</span>
                  </div>
                  <div class="card-body">
                     <div class="card-content">
                        
@foreach ($drone_agras as $row)          
<img src="{{asset($row->d_cover)}}" class="img-fluid radius-xl">
<p></p>
<ul>
    <li><h1>{{$row->d_model}}</h1></li>
    <li><i class="las la-angle-double-right"></i>
        ราคา {{number_format($row->d_price)}} บาท</li>
</ul>

<br>

<div class="alert-big alert alert-success" role="alert">
    <div class="alert-icon">
        <img src="{{asset('theme/img/svg/download.svg')}}" alt="download" class="svg">
     </div>
    <div class="alert-content">  
       <h3><a href="{{asset($row->d_file)}}" target="_blank">รายละเอียดสินค้า</a></h3>
    </div>
 </div>

<form action="{{route('home.drone_sub')}}" method="POST">
    @csrf
<input type="hidden" name="drone_id" value="{{$row->d_id}}">
<input type="hidden" name="member_id" value="{{Auth::user()->member_id}}">
    <div class="mb-3">
        <label for="car2" class="form-label">สนใจสินค้า</label>
        <input type="text" class="form-control" id="car2" placeholder="ระบุเบอร์โทรศัพท์" maxlength="10" name="user_phone" required>
        
      </div>
      
      <div class="mb-3">
        <label for="car2" class="form-label">ช่วงเวลาที่สะดวกให้ติดต่อกลับ</label>
        <input type="text" class="form-control" name="user_timing" required>
       
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="user_chk" value="1" required>
        <label class="form-check-label" for="exampleCheck1">ยืนยันความสนใจ</label>     
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
