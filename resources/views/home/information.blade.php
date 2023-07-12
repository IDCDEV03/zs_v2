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

                <div class="card card-horizontal card-default card-md mb-3 ">
                    <div class="card-header">
                        <h6>สมัครสมาชิก</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <div class="horizontal-form">
                            <form action="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a1"
                                                class="il-gray fs-14 fw-500 align-center mb-10">คำนำหน้า<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control px-15" id="exampleFormControlSelect1" required>
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
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3"
                                                class="il-gray fs-14 fw-500 align-center mb-10">นามสกุล<span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
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
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
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
                                                id="datepicker_thai">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3"
                                                class="il-gray fs-14 fw-500 align-center mb-10">เพศ<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control px-15" id="select_gender">
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
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">จังหวัด <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a3" class="il-gray fs-14 fw-500 align-center mb-10">อำเภอ
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">ตำบล
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">รหัสไปรษณีย์
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Line
                                                ID (ถ้ามี)</label>
                                            <input type="text"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <h4>อาชีพปัจจุบัน <span class="text-danger">*</span></h4>
                                    <div class="col-md-12 p-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" onclick="alert_one();" value="1">
                                            <label class="form-check-label" for="inlineRadio1">พนักงานเอกชน</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="2" onclick="alert_one();">
                                            <label class="form-check-label"
                                                for="inlineRadio2">รับราชการ/รัฐวิสาหกิจ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="3" onclick="alert_two();">
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
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">ตำแหน่ง <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">รายได้ต่อเดือน
                                                    </label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
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
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                </div>
                                            </div>
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

                                <button type="submit" class="btn btn-sm btn-primary">บันทึกและไปต่อ</button>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
        </div>

          <!-----------------------------footer------------------------>
          @include('layouts.footer')   

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
        $(document).ready(function() {
            $('#datepicker_thai').datepicker({
                format: 'dd/mm/yyyy',
                changeMonth: true,
                changeYear: true,
                startDate: '01/01/1950',
                endDate: '31/12/2018',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,

            });
        });
    </script>
</body>

</html>
