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

                <div class="card card-default card-md mb-4">
                  <img class="card-img-top" src="{{asset('theme/img/starbuck1.png')}}" alt="Card image cap">
                    <div class="card-header">
                       <h6>Life Style</h6>
                    </div>
                    <div class="card-body pb-md-30">
                       <form action="#">
                          <div class="form-group">
                             <label for="a11" class="il-gray align-center mb-10"><i class="fa fa-angle-double-right fa-sm" aria-hidden="true"></i> &nbsp;ท่านคิดว่าประกันเป็นสิ่งจำเป็นต่อชีวิตหรือไม่</label>
                             <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="input1" id="input1" value="Y">
                              <label class="form-check-label" for="input1">จำเป็น</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="input1" id="input2" value="N">
                              <label class="form-check-label" for="input2">ไม่จำเป็น</label>
                            </div>
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
                        </div>
                       
                        <div class="form-group mb-0">
                           <button type="submit" class="btn btn-secondary">บันทึก</button>
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
