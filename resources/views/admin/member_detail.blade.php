<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives</title>

    @include('layouts_admin.header')
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
        @include('layouts_admin.head')

        <div class="contents">

            <div class="container-fluid p-3">

                <div class="card card-horizontal card-default card-md mb-3 ">
                   @foreach ($member_data as $item)  
                    <div class="card-body py-md-30">
                        <h3 class="card-title py-md-10">{{$item->member_prefix}} {{$item->member_name}} {{$item->member_lastname}}</h3>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">หัวข้อ</th>
                                <th scope="col">รายละเอียด</th>                
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <th scope="row">เบอร์โทรศัพท์</th>
                                <td> {{$item->member_phone}} </td>
                              </tr>

                              <tr>
                                <th>อายุ</th>
                                <td></td>
                              </tr>

                              <tr>
                                <th>เพศ</th>
                                <td> {{$item->member_gender}} </td>
                              </tr>

                              <tr>
                                <th>ที่อยู่</th>
                                <td>{{$item->member_address}} {{$item->member_tambon}} {{$item->member_amphur}} {{$item->member_province}} {{$item->member_zipcode}} </td>
                              </tr>

                              <tr>
                                <th>อาชีพ</th>
                                <td> {{$item->member_career}} </td>
                              </tr>

                              <tr>
                                <th>สื่อที่มักใช้บริการ</th>
                                <td> {{$item->member_multimedia}} </td>
                              </tr>

                              <tr>
                                <th>กิจกรรม/งานอดิเรก</th>
                                <td> {{$item->member_activity}} </td>
                              </tr>

                              <tr>
                                <th>การเดินทาง</th>
                                <td> {{$item->member_travel}} </td>
                              </tr>

                              <tr>
                                <th>มีใบขับขี่หรือไม่</th>
                                <td></td>
                              </tr>
                              
                            </tbody>
                          </table>

                     
                          <h3 class="py-md-10 text-primary">แบบสอบถามเพิ่มเติม</h3>
                          <table class="table">                       
                            <tbody>
                                <tr>
                                    <th>ประกันเป็นสิ่งจำเป็นต่อชีวิตหรือไม่</th>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th>การวางแผนชีวิต</th>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th>ความคุ้มครองที่เหมาะสมกับท่าน</th>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th>ท่านรู้จักเราจากแหล่งใด</th>
                                    <td></td>
                                  </tr>
                              
                            </tbody>
                          </table>
                          @endforeach
                    </div>
                </div>
            </div>
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts_admin.footer')   
    </main>
  

    @include('layouts_admin.script')
   
</body>

</html>
