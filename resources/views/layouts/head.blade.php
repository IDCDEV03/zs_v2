<header class="header-top">

    <nav class="navbar navbar-light">
       <div class="navbar-left">
          <div class="logo-area">
             <a class="navbar-brand" href="#">
               <img src="{{ asset('theme/img/logo03.png')}}" alt="logo" height="50px"
               width="60px">
             </a>
             <a href="#" class="sidebar-toggle">
                <img class="svg" src="{{ asset('theme/img/svg/align-center-alt.svg')}}" alt="img"></a>
          </div>
       </div>

       <div class="top-menu">

         <div class="hexadash-top-menu position-relative">
            <ul class="d-flex align-items-center flex-wrap">
               <li>
                  <a href="{{route('home.dashboard')}}" class="active">หน้าหลัก</a>
               
               </li>
               <li class="has-subMenu">
                  <a href="#" class="">ห้องสังคม</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="#">ความถนัด</a>
                     </li>
                     <li class="">
                        <a href="#">ความสนใจอาชีพ</a>
                     </li>
                     <li class="">
                        <a href="#">สุขภาพ</a>
                     </li>
                  </ul>
               </li>
               <li class="has-subMenu">
                  <a href="#" class="">ผลิตภัณฑ์ของเรา</a>
                  <ul class="subMenu">
                     <li class="">
                        <a href="{{route('home.products_dl')}}">เรียนขับรถ</a>
                     </li>  
                     <li class="">
                        <a href="{{route('home.tz_list')}}">ศูนย์ฝึกอบรม</a>
                     </li>
                     <li class="">
                        <a href="{{route('home.drone')}}">หลักสูตรโดรน</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="{{route('home.sub_status')}}" class="">สถานะการสมัคร</a>
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
                   <a href="javascript:;" class="nav-item-toggle">
                      <span class="nav-item__title">{{ Auth::user()->member_name }}<i class="las la-angle-down nav-item__arrow"></i></span>
                   </a>
                   <div class="dropdown-parent-wrapper">
                      <div class="dropdown-wrapper">
                         <div class="nav-author__info">                          
                            <div>
                               <h6>{{ Auth::user()->member_name }}</h6>
                               <span>สมาชิก</span>
                            </div>
                         </div>
                         <div class="nav-author__options">
                            <ul>
                              
                               <li>
                                  <a href="">
                                     <i class="uil uil-setting"></i>
                                     Settings</a>
                               </li>
                              
                             
                            </ul>
                            <a href="{{route('logout')}}" class="nav-author__signout">
                               <i class="uil uil-sign-out-alt"></i>ออกจากระบบ</a>
                         </div>
                      </div>
                      <!-- ends: .dropdown-wrapper -->
                   </div>
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
 <div class="sidebar-wrapper">
   <aside class="sidebar sidebar-collapse" id="sidebar">
      <div class="sidebar__menu-group">
         @include('layouts._menu_sidebar')
      </div>
   </aside>
</div>