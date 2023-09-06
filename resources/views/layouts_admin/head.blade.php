<header class="header-top">
    <nav class="navbar navbar-light">
       <div class="navbar-left">
          <div class="logo-area">
             <a class="navbar-brand" href="#">
               <img src="{{ asset('theme/img/logo03.png')}}" alt="logo" height="50px"
               width="50px">
             </a>
             <a href="#" class="sidebar-toggle">
                <img class="svg" src="{{ asset('theme/img/svg/align-center-alt.svg')}}" alt="img"></a>
          </div>
       </div>

       <div class="top-menu">

         <div class="hexadash-top-menu position-relative">
            <ul class="d-flex align-items-center flex-wrap">
               <li>
                  <a href="{{route('admin.dashboard')}}" class="active">หน้าหลัก</a>
               
               </li>

               <li class="has-subMenu">
                  <a href="#" class="">โรงเรียนขับรถ</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('admin.branch_list')}}">สาขาโรงเรียน</a>
                     </li>
                     <li class="">
                        <a href="{{route('admin.dl_course')}}">หลักสูตร</a>
                     </li>
                  </ul>
               </li>

               
               <li class="has-subMenu">
                  <a href="#" class="">TZ</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('admin.tz_course')}}">แก้ไขข้อมูลหลักสูตร</a>
                     </li>                   
                  </ul>
               </li>

                    
               <li class="has-subMenu">
                  <a href="#" class="">Drone</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('admin.drone_list')}}">รายการโดรน</a>
                     </li>                    
                  </ul>
               </li>


               <li class="has-subMenu">
                  <a href="#" class="">เกี่ยวกับสมาชิก</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('admin.listuser')}}">รายชื่อสมาชิก</a>
                     </li>                    
                     <li class="">
                        <a href="#">สรุปรายงาน</a>
                     </li>
                  </ul>
               </li>
               <li class="has-subMenu">
                  <a href="#" class="">ตั้งค่า</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('logout')}}">ออกจากระบบ</a>
                     </li>   
                  </ul>
               </li>
            </ul>
         </div>
       </div>
             
       <!-- ends: navbar-left -->
       <div class="navbar-right">
          <ul class="navbar-right__menu">
             <li class="nav-search">
                <a href="#" class="search-toggle">
                   <i class="uil uil-search"></i>
                   <i class="uil uil-times"></i>
                </a>
                <form action="/" class="search-form-topMenu">
                   <span class="search-icon uil uil-search"></span>
                   <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                </form>
             </li>
     
             <!-- ends: .nav-flag-select -->
             <li class="nav-author">
                <div class="dropdown-custom">
                   <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('theme/img/admin.png')}}" alt="" class="rounded-circle">
                      <span class="nav-item__title">Administrator</span>
                   </a>                 
                </div>
             </li>
             <!-- ends: .nav-author -->
          </ul>
          <!-- ends: .navbar-right__menu -->
          <div class="navbar-right__mobileAction d-md-none">
             <a href="#" class="btn-search">
                <img src="{{ asset('theme/img/svg/search.svg')}}" alt="search" class="svg feather-search">
                <img src="{{ asset('theme/img/svg/x.svg')}}" alt="x" class="svg feather-x"></a>
             <a href="#" class="btn-author-action">
                <img class="svg" src="{{ asset('theme/img/svg/more-vertical.svg')}}" alt="more-vertical"></a>
          </div>
       </div>
       <!-- ends: .navbar-right -->
    </nav>
 </header>