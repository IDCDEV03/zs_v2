<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives V2.0</title>

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
                            <form action="{{ route('home.saveinformation1', ['id' => request()->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"
                                                class="il-gray fs-14 fw-500 align-center mb-10">คำนำหน้า<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control px-15" id="exampleFormControlSelect1" name="member_prefix" required>
                                                <option selected disabled>เลือก..</option>
                                                <option value="เด็กชาย">เด็กชาย</option>
                                                <option value="เด็กหญิง">เด็กหญิง</option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">ชื่อ<span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_name"
                                                required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3"
                                                class="il-gray fs-14 fw-500 align-center mb-10">นามสกุล<span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_lastname"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a1"
                                                class="il-gray fs-14 fw-500 align-center mb-10">เบอร์โทรศัพท์<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" maxlength="10"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_phone"
                                                required> 
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">วันเดือนปี(ค.ศ.)เกิด
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                name="member_hbd"
                                                id="datepicker_th">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3"
                                                class="il-gray fs-14 fw-500 align-center mb-10">เพศ<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control px-15" id="select_gender" name="member_gender">
                                                <option selected disabled>เลือก..
                                                </option>
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a1"
                                                class="il-gray fs-14 fw-500 align-center mb-10">ที่อยู่ปัจจุบัน <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">จังหวัด <span
                                                    class="text-danger">*</span></label>
                                                    <select name="member_province" class="form-control" id="input_province">
                                                        <option value="" selected disabled>กรุณาเลือกจังหวัด</option>
                                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3" class="il-gray fs-14 fw-500 align-center mb-10">อำเภอ
                                                <span class="text-danger">*</span></label>
                                                <select name="member_amphur" id="input_amphoe" class="form-control">
                                                    <option value="" selected disabled>กรุณาเลือกเขต/อำเภอ</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">ตำบล
                                                <span class="text-danger">*</span></label>
                                                <select name="member_tambon" id="input_tambon" class="form-control">
                                                    <option value="" selected disabled>กรุณาเลือกแขวง/ตำบล</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">รหัสไปรษณีย์
                                                <span class="text-danger">*</span></label>
                                            <input name="member_zipcode" type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="input_zipcode">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Line
                                                ID (ถ้ามี)</label>
                                            <input name="member_lineid" type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <h4>อาชีพปัจจุบัน <span class="text-danger">*</span></h4>
                                    <div class="col-md-12 p-3">
                                        <div class="form-check form-check-inline">
                                            <input name="member_career" class="form-check-input" type="radio" 
                                                id="inlineRadio1" onclick="alert_one();" value="พนักงานเอกชน">
                                            <label class="form-check-label" for="inlineRadio1">พนักงานเอกชน</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="member_career"
                                                id="inlineRadio2" value="รับราชการ/รัฐวิสาหกิจ" onclick="alert_one();">
                                            <label class="form-check-label"
                                                for="inlineRadio2">รับราชการ/รัฐวิสาหกิจ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="member_career"
                                                id="inlineRadio3" value="นักเรียน/นักศึกษา" onclick="alert_two();">
                                            <label class="form-check-label"
                                                for="inlineRadio3">นักเรียน/นักศึกษา</label>
                                        </div>



                                    </div>
                                    <div id="myDiv" style="display:none">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">ชื่อบริษัท/หน่วยงาน
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_career_name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">ตำแหน่ง <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_position">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">รายได้ต่อเดือน
                                                    </label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_income">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">จำนวนรายรับของครอบครัว
                                                      </label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_family_income">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">จำนวนสมาชิกในครอบครัว</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15" name="member_family_number">
                                                </div>
                                            </div>                                  
                                        </div>

                                    </div>

                                    <div id="myScl" style="display:none">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">ชื่อโรงเรียน<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">ระดับชั้น <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">รายรับของครอบครัว
                                                       
                                                    </label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
                                            <div class="row">
                                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="a2"
                                            class="il-gray fs-14 fw-500 align-center mb-10">จำนวนสมาชิกในครอบครัว</label>
                                        <input type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light px-15">
                                    </div>
                                </div>                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">บันทึกและไปต่อ</button>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
        </div>

          <!-----------------------------footer------------------------>
          @include('guest.footer')   

    @include('layouts.script')
    <script>
        function alert_one() {
            var div = document.getElementById('myDiv');
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>

    <script>
        function alert_two() {
            var div = document.getElementById('myScl');
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>

    <script>
        $("#select_gender").select2({
            minimumResultsForSearch: Infinity,
            placeholder: "กรุณาเลือก",
            allowClear: true,
        });
    </script>
 
 <script>
   function showProvinces() {
    let input_province = document.querySelector("#input_province");
    let url = "https://ckartisan.com/api/provinces";
    console.log(url);
    // if(input_province.value == "") return;
    fetch(url)
    .then((response) => response.json())
    .then((result) => {
        console.log(result);
        //UPDATE SELECT OPTION
        let input_province = document.querySelector("#input_province");
        input_province.innerHTML =
        '<option value="">กรุณาเลือกจังหวัด</option>';
        for (let item of result) {
        let option = document.createElement("option");
        option.text = item.province;
        option.value = item.province;
        input_province.appendChild(option);
        }
        //QUERY AMPHOES
        showAmphoes();
    });
}

function showAmphoes() {
    let input_province = document.querySelector("#input_province");
    let url =
    "https://ckartisan.com/api/amphoes?province=" + input_province.value;
    console.log(url);
    // if(input_province.value == "") return;
    fetch(url)
    .then((response) => response.json())
    .then((result) => {
        console.log(result);
        //UPDATE SELECT OPTION
        let input_amphoe = document.querySelector("#input_amphoe");
        input_amphoe.innerHTML =
        '<option value="">กรุณาเลือกเขต/อำเภอ</option>';
        for (let item of result) {
        let option = document.createElement("option");
        option.text = item.amphoe;
        option.value = item.amphoe;
        input_amphoe.appendChild(option);
        }
        //QUERY AMPHOES
        showTambons();
    });
}
function showTambons() {
    let input_province = document.querySelector("#input_province");
    let input_amphoe = document.querySelector("#input_amphoe");
    let url =
    "https://ckartisan.com/api/tambons?province=" +
    input_province.value +
    "&amphoe=" +
    input_amphoe.value;
    console.log(url);
    // if(input_province.value == "") return;
    // if(input_amphoe.value == "") return;
    fetch(url)
    .then((response) => response.json())
    .then((result) => {
        console.log(result);
        //UPDATE SELECT OPTION
        let input_tambon = document.querySelector("#input_tambon");
        input_tambon.innerHTML =
        '<option value="">กรุณาเลือกแขวง/ตำบล</option>';
        for (let item of result) {
        let option = document.createElement("option");
        option.text = item.tambon;
        option.value = item.tambon;
        input_tambon.appendChild(option);
        }
        //QUERY AMPHOES
        showZipcode();
    });
}
function showZipcode() {
    let input_province = document.querySelector("#input_province");
    let input_amphoe = document.querySelector("#input_amphoe");
    let input_tambon = document.querySelector("#input_tambon");
    let url =
    "https://ckartisan.com/api/zipcodes?province=" +
    input_province.value +
    "&amphoe=" +
    input_amphoe.value +
    "&tambon=" +
    input_tambon.value;
    console.log(url);
    // if(input_province.value == "") return;
    // if(input_amphoe.value == "") return;
    // if(input_tambon.value == "") return;
    fetch(url)
    .then((response) => response.json())
    .then((result) => {
        console.log(result);
        //UPDATE SELECT OPTION
        let input_zipcode = document.querySelector("#input_zipcode");
        input_zipcode.value = "";
        for (let item of result) {
        input_zipcode.value = item.zipcode;
        break;
        }
    });
}
//EVENTS
document
    .querySelector("#input_province")
    .addEventListener("change", (event) => {
    showAmphoes();
    });
document
    .querySelector("#input_amphoe")
    .addEventListener("change", (event) => {
    showTambons();
    });
document
    .querySelector("#input_tambon")
    .addEventListener("change", (event) => {
    showZipcode();
    });

showProvinces();
</script>

</body>

</html>
