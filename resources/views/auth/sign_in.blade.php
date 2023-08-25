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

                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>ID Drives :: Log In</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                           <form action="{{ route('login.perform') }}" method="POST">
                                        @csrf

                                        <div class=" alert alert-info " role="alert">
                                            <div class="alert-content">        
                                               <p>เข้าสู่ระบบด้วยเบอร์โทรศัพท์ที่ลงทะเบียน</p>
                                            </div>
                                         </div>

                                        <span class="text-normal color-primary"></span>
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-20">
                                                <label for="email">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้">        
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="รหัสผ่าน" >
                                                    <span toggle="#password-field" class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></span>
                                                </div>
                                                @if($errors->has('password'))
                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                @endif
                                            </div>
                                            <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-1">
                                                    <label for="check-1">
                                                        <span class="checkbox-text">Keep me logged in</span>
                                                    </label>
                                                </div>
                                        <a href="{{route('consent')}}">สมัครสมาชิก</a>
                                            </div>
                                            <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-30 signIn-createBtn ">
                                                    เข้าสู่ระบบ
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
