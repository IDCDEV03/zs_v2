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

                <div class="card card-horizontal card-default card-md mb-3 ">
    @foreach ($tz_detail as $item)
         <div class="card-body py-md-30">
                    @if ($item->tz_group == 'TZ01')
                        <h3>รายการฝึกอบรมหลักสูตร</h3>
                        <br>
                      <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การขับขี่อย่างปลอดภัย การขับรถเชิงป้องกันอุบัติเหตุ</li> 
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> จิตสำนึก ทัศนคติ ในการทำงาน และ ภาพลักษณ์ขององค์กร</li> 
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> เทคนิคการขับรถ ขึ้นลงทางลาดชัน</li> 
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การขับรถขนส่งวัตถุอันตราย</li> 
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การบริหาร ความเหนื่อยล้า</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การบรรทุกและรัดตรึงสินค้า</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การขับรถรับส่งผู้โดยสาร และการให้บริการ</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การตรวจสอบและวิเคราะห์อุบัติเหตุ</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> กฎหมายที่เกี่ยวข้องกับการใช้รถ ใช้ถนน</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การใช้งานและอุปกรณ์ของรถอย่างถูกวิธีเพื่อป้องกันความเสียหาย</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การตรวจเช็ครถก่อนใช้งานอย่างมืออาชีพ</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> การขับรถในเหมือง</li>
                    </ul>  
                  
                    @elseif($item->tz_group == 'TZ02')

                    <h3>รายการฝึกอบรมหลักสูตรความปลอดภัย SAFETY</h3>
                    <br>
                  <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> หลักสูตรอบรมความปลอดภัยก่อนเข้าทำงาน</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> หลักสูตรอบรม จป. หัวหน้างาน</li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> หลักสูตรอบรม จป. บริหาร</li>
                  </ul>

                    @elseif($item->tz_group == 'TZ03')

                    <h3>ฝึกอบรมมาตรฐานวิชาชีพ TPQI</h3>
                    <br>
                    <ul>
                      <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานอาชีพผู้ควบคุมรถบรรทุกขนาดใหญ่
                      </li>
                      <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานอาชีพผู้ควบคุมรถขนส่งขนาดเล็ก
                      </li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานอาชีพผู้ควบคุมรถลากจูง 
</li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานอาชีพบรรจุหีบห่อและวัสดุภัณฑ์
</li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานวิชาชีพผู้จัดส่งพัสดุด่วน
</li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานวิชาชีพผู้ขนย้ายอุปกรณ์สำนักงาน
</li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> รับรองมาตรฐานวิชาชีพผู้ปฏิบัติการขนส่งทางถนน
</li>
<li>
  <i class="fa fa-angle-double-right" aria-hidden="true"></i> ตรวจรับรองมาตรฐานความปลอดภัยยานพาหนะ
</li>
                    </ul>
                 
                    @endif

                    <hr>  
                    <p class="fw-500">หลักสูตรที่สนใจ</p>
                    <p class="text-info">{{$item->tz_name}} ({{$item->tz_fullname}})</p>
                  
                 <form action="{{route('home.tz_sub')}}" method="POST">
                    @csrf
                <input type="hidden" name="tz_id" value="{{$item->tz_id}}">
                <input type="hidden" name="tz_group" value="{{$item->tz_group}}">
                <input type="hidden" name="member_id" value="{{Auth::user()->member_id}}">
                    <div class="mb-3">
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



    <!-----------------------------footer------------------------>
    @include('layouts.footer')   
    </main>
  

    @include('layouts.script')
 
</body>
</html>
