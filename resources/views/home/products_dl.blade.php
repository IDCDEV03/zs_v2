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

                <div class="row">
                    <div class="col-md-12">
                       <!-- Filter Controls - Simple Mode -->
                       <div class="gallery-filter mb-sm-50 mb-30">
                          <ul class="simplefilter w-100 ap-tab-main px-sm-25 px-15 bg-white d-flex flex-wrap align-items-center radius-xl">
                             <li class="fltr-controls nav-link active" data-filter="all">ทั้งหมด</li>
                             <li class="fltr-controls nav-link" data-filter="1">สาขาขอนแก่น </li>
                             <li class="fltr-controls nav-link" data-filter="2">สาขามหาสารคาม</li>
                             <li class="fltr-controls nav-link" data-filter="3">สาขาสระบุรี</li>
                             <li class="fltr-controls nav-link" data-filter="4">สาขาปทุมธานี</li>
                          </ul>
                          <div class="push-down push-down--style">
                             <div class="filtr-container">
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Busy streets">
                                   <div class="card">
     
                                      <div class="gc ">
                                         <div class="gc__img">
                                            <img src="{{asset('theme/img/card_branch/branch_nonthan.png')}}" alt="img" class="w-100 radius-xl">
                                         </div>
                                         <div class="card-body px-25 py-20">
                                            <div class="gc__title">
                                               <P>สาขาโนนทัน จ.ขอนแก่น</P>
                                               <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                            </div>
                                         </div>
                                      </div>
     
                                   </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Luminous night">
                                   <div class="card">
     
                                      <div class="gc ">
                                         <div class="gc__img">
                                            <img src="{{asset('theme/img/card_branch/branch_pro.png')}}" alt="img" class="w-100 radius-xl">
                                         </div>
                                         <div class="card-body px-25 py-20">
                                            <div class="gc__title">
                                               <P>สาขาเดอะโปรเฟชชั่นแนล (ถ.เลี่ยงเมือง จ.ขอนแก่น)</P>
                                               <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                            </div>
                                         </div>
                                      </div>
     
                                   </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="City wonders">
                                   <div class="card">
     
                                      <div class="gc ">
                                         <div class="gc__img">
                                            <img src="{{asset('theme/img/card_branch/branch_s1.png')}}" alt="img" class="w-100 radius-xl">
                                         </div>
                                         <div class="card-body px-25 py-20">
                                            <div class="gc__title">
                                               <P>สาขา อ.เมือง จ.มหาสารคาม</P>
                                               <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                            </div>
                                         </div>
                                      </div>
     
                                   </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="In production">
                                   <div class="card">
     
                                      <div class="gc ">
                                         <div class="gc__img">
                                            <img src="{{asset('theme/img/card_branch/branch_s2.png')}}" alt="img" class="w-100 radius-xl">
                                         </div>
                                         <div class="card-body px-25 py-20">
                                            <div class="gc__title">
                                               <P>สาขา อำเภอพยัคฆภูมิพิสัย</P>
                                               <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                            </div>
                                         </div>
                                      </div>
     
                                   </div>
                                </div>

                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="In production">
                                    <div class="card">
      
                                       <div class="gc ">
                                          <div class="gc__img">
                                             <img src="{{asset('theme/img/card_branch/branch_saraburi.png')}}" alt="img" class="w-100 radius-xl">
                                          </div>
                                          <div class="card-body px-25 py-20">
                                             <div class="gc__title">
                                                <P>สาขาแก่งคอย จ.สระบุรี</P>
                                                <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                             </div>
                                          </div>
                                       </div>
      
                                    </div>
                                 </div>

                                 <div class="filtr-item filtr-item--style" data-category="4" data-sort="In production">
                                    <div class="card">
      
                                       <div class="gc ">
                                          <div class="gc__img">
                                             <img src="{{asset('theme/img/card_branch/branch_pathum.png')}}" alt="img" class="w-100 radius-xl">
                                          </div>
                                          <div class="card-body px-25 py-20">
                                             <div class="gc__title">
                                                <P>สาขาลำลูกกา จ.ปทุมธานี</P>
                                                <span>โรงเรียนสอนขับรถพร้อมใบขับขี่</span>
                                             </div>
                                          </div>
                                       </div>
      
                                    </div>
                                 </div>

                             </div>
                          </div>
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
