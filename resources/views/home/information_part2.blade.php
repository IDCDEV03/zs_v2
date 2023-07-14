<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives V2.0</title>

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
                    <div class="card-header">
                        <h6>สมัครสมาชิก</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <div class="horizontal-form">
                            <form action="#">
                                @csrf

                                <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="a8" class="il-gray fs-14 fw-500 align-center mb-10">ท่านมักใช้เวลาบนสื่อใดบ้าง</label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            LINE
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            TIKTOK
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Facebook
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Instagram
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Youtube
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Twiiter
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            บริการสตรีมมิ่ง (เช่น Disney+, Netflix, VIU, WeTV, iQIYI)
                                          </label>
                                        </div>
                                     
                                      
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="a9" class="il-gray fs-14 fw-500 align-center mb-10">กิจกรรม/งานอดิเรกที่ชื่นชอบ</label>
                                       <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          ศิลปะ/ดนตรี
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          หนังสือ
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          กีฬา
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          ภาพยนต์
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          Social Network
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          แคมป์ปิ้ง
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          ทำอาหาร
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          ท่องเที่ยว
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          เล่นเกม
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          นอน
                                        </label>
                                      </div>

                                    </div>
                                 </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="a8" class="il-gray fs-14 fw-500 align-center mb-10">ท่านเดินทางโดยใช้วิธีใด</label>
                                           
                                            <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                             <label class="form-check-label" for="defaultCheck1">
                                             รถยนต์ส่วนตัว
                                             </label>
                                           </div>
                                           <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                             <label class="form-check-label" for="defaultCheck1">
                                                 รถจักรยานยนต์
                                             </label>
                                           </div>
                                           <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                             <label class="form-check-label" for="defaultCheck1">
                                                 รถสาธารณะ
                                             </label>
                                           </div>
                                          
                                           
                                         </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="a9" class="il-gray fs-14 fw-500 align-center mb-10">ท่านมีใบขับขี่หรือไม่</label>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              มี
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              ไม่มี
                                            </label>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                            

                                  <div class="form-group mb-25">
                                    <button type="submit" class="btn btn-primary">บันทึกและไปต่อ</button>
                                 </div>
                              
                            </form>
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
