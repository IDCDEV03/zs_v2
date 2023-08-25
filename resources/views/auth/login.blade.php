<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives Company</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor_assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor_assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor_assets/css/variables.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/img/logo_fav.png') }}">
</head>
<body>
    <main class="main-content">
        <div class="admin" style="background-image:url({{ asset('theme/img/login_bg.png') }});">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <img src="{{ asset('theme/img/logo_fav.png') }}" alt="">
                            </div>

                            <div class="card">
                                <div class="card-body">
                                 สมัครสมาชิกเพื่อรับสิทธิประโยชน์มากยิ่งขึ้น

                                 <div class=" alert alert-info " role="alert">
                                    <div class="alert-content">        
                                       <p><a href="{{route('consent')}}">คลิกที่นี่</a> เพื่อสมัครสมาชิก</p>
                                    </div>
                                 </div>

                                 <p>หากเป็นสมัครสมาชิกแล้ว 
                                    <a href="{{route('signin_show')}}"> คลิกที่นี่ </a>เพื่อเข้าสู่ระบบ</p>
                                </div>
                              </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  
 
    <script src="{{ asset('theme/assets/vendor_assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor_assets/js/script.min.js') }}"></script>
</body>
</html>
