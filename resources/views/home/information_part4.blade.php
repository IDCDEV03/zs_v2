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

                <div class="card card-default card-md mb-4">
                  <img class="card-img-top" src="{{asset('theme/img/starbuck1.png')}}" alt="Card image cap">
                    <div class="card-header">
                       <h6>Life Style</h6>
                    </div>
                    <div class="card-body pb-md-30">
                      <form action="{{ route('home.saveinformation4',['id' => request()->id]) }}" method="POST">
                        @csrf
                          <div class="form-group">
                             <label for="a11" class="il-gray align-center mb-10"><i class="fa fa-angle-double-right fa-sm" aria-hidden="true"></i> &nbsp;ท่านคิดว่าประกันเป็นสิ่งจำเป็นต่อชีวิตหรือไม่</label>
                             <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="input1" id="input1" value="จำเป็น">
                              <label class="form-check-label" for="input1">จำเป็น</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="input1" id="input2" value="ไม่จำเป็น">
                              <label class="form-check-label" for="input2">ไม่จำเป็น</label>
                            </div>
                            @error('input1')
<span class="text-danger">{{$message}}</span>
@enderror
                          </div>

                          <div class="form-group">
                           <label for="a11" class="il-gray align-center mb-10"><i class="fa fa-angle-double-right fa-sm" aria-hidden="true"></i> &nbsp;ท่านวางแผนชีวิตไว้อย่างไร</label>
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="input2" id="input3" value="1">
                            <label class="form-check-label" for="input3">ต้องการมีหลักประกันสำหรับตนเองและครอบครัว</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="input2" id="input4" value="2">
                            <label class="form-check-label" for="input4">ต้องการวางแผนการเกษียณอายุ</label>
                          </div>
                          <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="input2" id="input5" value="3">
                           <label class="form-check-label" for="input5">ยังไม่แน่ใจ</label>
                         </div>
                      @error('input2')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>

                        <div class="form-group">
                           <label for="a11" class="il-gray align-center mb-10">
                              <i class="fa fa-angle-double-right fa-sm" aria-hidden="true"></i> &nbsp;
                              ท่านคิดว่าความคุ้มครองใดเหมาะสมกับท่าน</label>
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="input3" id="input6" value="1">
                            <label class="form-check-label" for="input6">
                              แบบสะสมทรัพย์</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="input3" id="input7" value="2">
                            <label class="form-check-label" for="input7">แบบมีปันผลตามระยะเวลา</label>
                          </div>
                          <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="input3" id="input8" value="3">
                           <label class="form-check-label" for="input8">แบบเพื่อการลงทุน</label>
                         </div>
                        @error('input3')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="a8" class="il-gray fw-500 align-center mb-10"> <i class="fa fa-angle-double-right fa-sm" aria-hidden="true"></i> &nbsp;ท่านรู้จักเราจากแหล่งใด</label>
                             
                              <div class="form-check">
                               <input class="form-check-input" type="checkbox" name="q4[]" value="Recommended" id="qt1">
                               <label class="form-check-label" for="qt1">
                               มีคนแนะนำ
                               </label>
                             </div>

                             <div class="form-check">
                               <input class="form-check-input" type="checkbox" name="q4[]" value="Google" id="qt2">
                               <label class="form-check-label" for="qt2">
                                   Google
                               </label>
                             </div>

                             <div class="form-check">
                               <input class="form-check-input" type="checkbox" name="q4[]" value="Youtube" id="qt3">
                               <label class="form-check-label" for="qt3">
                                   Youtube
                               </label>
                             </div>

                             <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="q4[]" value="Line" id="qt4">
                              <label class="form-check-label" for="qt4">
                                  Line
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="q4[]" value="Signboard" id="qt5">
                              <label class="form-check-label" for="qt5">
                                  ป้ายโฆษณา
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="q4[]" value="Leaflet" id="qt6">
                              <label class="form-check-label" for="qt6">
                                  แผ่นพับประชาสัมพันธ์
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="q4[]" value="SMS" id="qt7">
                              <label class="form-check-label" for="qt7">
                                  SMS ประชาสัมพันธ์
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="q4[]" value="Event" id="qt8">
                              <label class="form-check-label" for="qt8">
                                  งานอีเว้นท์
                              </label>
                            </div>
                                                        
                           </div>                       
                      </div>
                       
                        <div class="form-group mb-0">
                           <button type="submit" class="btn btn-secondary">บันทึกข้อมูล</button>
                        </div>

                       </form>
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
