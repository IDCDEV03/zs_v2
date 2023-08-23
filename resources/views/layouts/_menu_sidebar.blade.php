<ul class="sidebar_nav">
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
    <li>
       <a href="#" class="">ข่าวสาร/กิจกรรม</a>
    </li>
 </ul>