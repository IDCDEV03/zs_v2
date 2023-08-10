<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives Company</title>

    @include('guest.header')
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
        @include('guest.head')

        <div class="contents">
            <div class="container-fluid p-3">
                <div class="card card-horizontal card-default card-md mb-3 ">
                    <div class="card-header">
                        <h6>สมัครสมาชิก</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <div class="horizontal-form">
                            <form action="{{ route('home.saveinformation2',['id' => request()->id]) }}" method="POST">
                                @csrf

                                <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="a8" class="il-gray fw-500 align-center mb-10">ท่านมักใช้เวลาบนสื่อใดบ้าง</label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="LINE" name="ins1[]" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            LINE
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="TikTok" name="ins1[]" id="defaultCheck2">
                                          <label class="form-check-label" for="defaultCheck2">
                                            TikTok
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Facebook" name="ins1[]" id="defaultCheck3">
                                          <label class="form-check-label" for="defaultCheck3">
                                            Facebook
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Instagram" name="ins1[]" id="defaultCheck4">
                                          <label class="form-check-label" for="defaultCheck4">
                                            Instagram
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Youtube" name="ins1[]" id="defaultCheck5">
                                          <label class="form-check-label" for="defaultCheck5">
                                            Youtube
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Twitter" name="ins1[]" id="defaultCheck6">
                                          <label class="form-check-label" for="defaultCheck6">
                                            Twitter
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Streaming" name="ins1[]" id="defaultCheck7">
                                          <label class="form-check-label" for="defaultCheck7">
                                            บริการสตรีมมิ่ง (เช่น Disney+, Netflix, VIU, WeTV, iQIYI)
                                          </label>
                                        </div>
                                     
                                      
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="a9" class="il-gray fw-500 align-center mb-10">กิจกรรม/งานอดิเรกที่ชื่นชอบ</label>
                                       <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Art" name="ins2[]" id="activity1">
                                        <label class="form-check-label" for="activity1">
                                          ศิลปะ/ดนตรี
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Book" name="ins2[]" id="activity2">
                                        <label class="form-check-label" for="activity2">
                                          หนังสือ
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Sport" name="ins2[]" id="activity3">
                                        <label class="form-check-label" for="activity3">
                                          กีฬา
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Movie" name="ins2[]" id="activity4">
                                        <label class="form-check-label" for="activity4">
                                          ภาพยนต์
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="SocialNetwork" name="ins2[]" id="activity5">
                                        <label class="form-check-label" for="activity5">
                                          Social Network
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Camping" name="ins2[]" id="activity6">
                                        <label class="form-check-label" for="activity6">
                                          แคมป์ปิ้ง
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Cooking" name="ins2[]" id="activity7">
                                        <label class="form-check-label" for="activity7">
                                          ทำอาหาร
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Travel" name="ins2[]" id="activity8">
                                        <label class="form-check-label" for="activity8">
                                          ท่องเที่ยว
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gaming" name="ins2[]" id="activity9">
                                        <label class="form-check-label" for="activity9">
                                          เล่นเกม
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Sleep" name="ins2[]" id="activity10">
                                        <label class="form-check-label" for="activity10">
                                          นอน
                                        </label>
                                      </div>

                                    </div>
                                 </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="a8" class="il-gray fw-500 align-center mb-10">ท่านเดินทางโดยใช้วิธีใด</label>
                                           
                                            <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="ins3[]" value="รถยนต์ส่วนตัว" id="qt1">
                                             <label class="form-check-label" for="qt1">
                                             รถยนต์ส่วนตัว
                                             </label>
                                           </div>
                                           <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="ins3[]" value="รถจักรยานยนต์" id="qt2">
                                             <label class="form-check-label" for="qt2">
                                                 รถจักรยานยนต์
                                             </label>
                                           </div>
                                           <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="ins3[]" value="รถสาธารณะ" id="qt3">
                                             <label class="form-check-label" for="qt3">
                                                 รถสาธารณะ
                                             </label>
                                           </div>
                                          
                                           
                                         </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="a9" class="il-gray fw-500 align-center mb-10">ท่านมีใบขับขี่หรือไม่</label>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="license_chk" id="car1" value="Y">
                                            <label class="form-check-label" for="car1">
                                              มี
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="license_chk" id="car2" value="N" >
                                            <label class="form-check-label" for="car2">
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
