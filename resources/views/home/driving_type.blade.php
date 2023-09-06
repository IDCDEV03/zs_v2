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
               <div class="row">

                <div class="card">
                    <div class="card-header">
                        รายละเอียดหลักสูตร
                      </div>

                    <div class="card-body">
                     @foreach ($dl_type as $item)
                     @php
                         $detail = $item->dl_detail;
                         $price = $item->dl_price;
                     @endphp                     
                       <h5 class="card-title"> {{$item->dl_course_name}} </h5>
                     
                         {!! $detail !!}

                         <div class="alert-big alert alert-info mt-20 " role="alert">
                            <div class="alert-content">
                               <h1 class='alert-heading'>ราคา</h1>
                               <h4 class="text-info">{{number_format($item->dl_price)}} บาท</h4>
                            </div>
                         </div>

                         @if ($item->dl_other != "")
                         <div class="alert-big alert alert-warning mt-20 " role="alert">
                            <div class="alert-content">
                               <h1 class='alert-heading'>*หมายเหตุ*</h1>
                               <span class="text-warning"> {{$item->dl_other}} </span>
                            </div>
                         </div> 
                         @endif

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

<form action="{{route('home.driving_sub')}}" method="POST">
 @csrf
<input type="hidden" name="dl_branch" value="{{$branch}}">
<input type="hidden" name="dl_type" value="{{$type}}">
 <input type="hidden" name="member_id" value="{{Auth::user()->member_id}}">
                        <div class="mb-3 mt-20">
                            <label for="car2" class="form-label">สนใจสมัครหลักสูตร</label>
                            <input type="text" class="form-control" id="car2" placeholder="ระบุเบอร์โทรศัพท์" name="user_phone" maxlength="10" required>
                          </div>
                          
                          <div class="mb-3">
                            <label for="car2" class="form-label">ช่วงเวลาที่สะดวกให้ติดต่อกลับ</label>
                            <input type="text" name="user_timing" class="form-control" name="time_chk" required>
                          </div>

                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="user_chk" required>
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
