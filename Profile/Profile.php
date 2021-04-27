<?php require('database/connection.php'); ?>
<div class="col-xl-8 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0 h1">
                        ข้อมูลทั่วไป
                        <img src="https://img.icons8.com/dusk/30/000000/general-ledger.png" />
                    </h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="Profile/API/backend.php?api=genaral" method="POST">
                <h6 class="h2 mb-4">ประวัติส่วนตัว</h6>
                <div class="pl-lg-4">
                    <div class="row col-lg-12">
                        <div class="form-group col-6">
                            <label class="form-control-label" for="code">รหัสผู้ป่วย</label>
                            <input type="text" id="code" name="code" class="form-control text-dark" placeholder="รหัสผู้ป่วย">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="ID_card">เลขบัตรประชาชน</label>
                            <input type="number" id="ID_card" name="ID_card" class="form-control text-dark" placeholder="เลขบัตรประชาชน">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="year_age">อายุปี</label>
                            <input type="text" id="Age_year" name="Age_year" class="form-control text-dark" placeholder="อายุ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="Age_month">อายุเดือน</label>
                            <input type="text" id="Age_month" name="Age_month" class="form-control text-dark" placeholder="อายุ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="input-first-name">ชื่อ</label>
                            <input type="text" id="Name" name="Name" class="form-control text-dark" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="input-last-name">นามสกุล</label>
                            <input type="text" class="form-control text-dark" id="LName" name="LName" placeholder="นามสกุล">
                        </div>
                        <div class="form-group col-12">
                            <label class="form-control-label" for="input-first-name">อาชีพ(ระบุลักษณะงานที่ทำอย่างละเอียด เช่น บุคลากรทางการแพทย์ เจ้าหน้าที่ที่สัมผัสกับนักท่องเที่ยว)</label>
                            <input type="text" id="Career" name="Career" class="form-control text-dark" placeholder="อาชีพ">
                        </div>
                        <div class="form-group col-6">
                            <h5>เพศ</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="Male" value="Male">
                                <label class="form-check-label" for="Male">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="Female" value="Femail">
                                <label class="form-check-label" for="Female">หญิง</label>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <h5>กรณีเพศหญิง</h5>
                            <div class="form-check form-check-inline" onclick="close_data()">
                                <input class="form-check-input" type="radio" name="Spregnant" id="No_pregnant" value="No">
                                <label class="form-check-label" for="No_pregnant">ไม่ได้ตั้งครรภ์</label>
                            </div>
                            <div class="form-check form-check-inline" onclick="show_data()">
                                <input class="form-check-input" type="radio" name="Spregnant" id="pregnant" value="Have">
                                <label class="form-check-label" for="pregnant">ตั้งครรภ์</label>
                            </div>
                            <div class="form-check form-check-inline" id="hide" style="display : none">
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="pregnantNO">ตั้งครรภ์ที่</label>
                                    <input type="text" class="form-control text-dark" id="pregnantNO" name="pregnantNO" placeholder="ครั้งที่">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="MountOfPre">อายุครรภ์</label>
                                    <input type="text" class="form-control text-dark" id="MountOfPre" name="MountOfPre" placeholder="อายุครรรภ์ เป็น สัปดาห์">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-control-label" for="Work_Edu">สถานที่ทำงาน/สถานที่ศึกษา</label>
                            <input type="text" id="Work_Edu" name="Work_Edu" class="form-control text-dark" placeholder="สถานที่ทำงาน/สถานที่ศึกษา">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-control-label" for="PhoneNo">เบอร์โทรศัพท์ที่ติดต่อได้</label>
                            <input type="text" id="PhoneNo" name="PhoneNo" class="form-control text-dark" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                        </div>
                        <div class="form-group col-lg-12">
                            <label class="form-control-label" for="Mochana_Phone">เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน"หมอชนะ"</label>
                            <input type="text" id="Mochana_Phone" name="Mochana_Phone" class="form-control text-dark" placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน">
                        </div>
                    </div>

                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="h2 mb-4">ข้อมูลที่อยู่</h6>
                    <div class="form-group">
                        <label class="form-control-label">ที่อยู่ขณะป่วยในประเทศไทย</label>
                        <div class="form-group col-12">
                            <div class="form-check form-check-inline" onclick="close_dataadd()">
                                <input class=" form-check-input" type="radio" name="type_house" id="house" value="House">
                                <label class="form-check-label" for="house">บ้าน</label>
                            </div>
                            <div class="form-check form-check-inline" onclick="show_dataadd()">
                                <input class="form-check-input" type="radio" name="type_house" id="other" value="Other">
                                <label class="form-check-label" for="other">อื่นๆ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="hide_home" style="display : none">
                        <label class="form-control-label" for="OtherAdd">ที่อยู่ประเภทอื่น</label>
                        <input type="text" class="form-control text-dark" id="OtherAdd" name="OtherAdd" placeholder="เช่น คอนโด">
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="form-control-label" for="H_number">บ้านเลขที่</label>
                            <input class="form-control text-dark" id="H_number" name="H_number"" placeholder=" ที่อยู่" type="text">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Moo">หมู่ที่</label>
                            <input class="form-control text-dark" id="Moo" name="Moo" placeholder="หมู่ที่" type="text">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Village">หมู่บ้าน</label>
                            <input class="form-control text-dark" id="Village" name="Village" placeholder="หมู่บ้าน" type="text">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Road">ถนน</label>
                            <input type=" text" class="form-control text-dark" id="Road" name="Road" placeholder="ถนน">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Side_road">ซอย</label>
                            <input class=" form-control text-dark" id="Side_road" name="Side_road" placeholder="ซอย" type="text">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="District">ตำบล</label>
                            <input type="text" class="form-control text-dark" id="District" name="District" placeholder="ตำบล">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Amphur">อำเภอ</label>
                            <input type="text" class="form-control text-dark" id="Amphur" name="Amphur" placeholder="อำเภอ">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Province">จังหวัด</label>
                            <input type="text" class="form-control text-dark" id="Province" name="Province" placeholder="จังหวัด">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="postalcode">รหัสไปรษณี</label>
                            <input type="text" class="form-control text-dark" id="postalcode" name="postalcode" placeholder="รหัสไปรษณี">
                        </div>

                    </div>
                </div>
                <!-- ประวัติโรคประจำตัว -->
                <hr class="my-4" />
                <h6 class="h2 mb-4">ประวัติโรคประจำตัว</h6>
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">โรคประจำตัว</label>
                        <textarea rows="4" class="form-control my-3 text-dark" placeholder="กรอกข้อมูลโรคประจำตัว" name="Diseases"></textarea>
                        <label class="form-control-label ">ประวัติการสูบบุหรี่</label>
                        <div class="form-group col-12 text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input text-dark" type="radio" name="type_smoke" id="No_smoking" value="No_smoking">
                                <label class="form-check-label" for="No_smoking">ไม่เคยสูบ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input text-dark" type="radio" name="type_smoke" id="Smoke" value="Smoke">
                                <label class="form-check-label" for="Smoke">ยังสูบอยู่</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input text-dark" type="radio" name="type_smoke" id="Stop_smoke" value="Stop_smoke">
                                <label class="form-check-label" for="Stop_smoke">เคยสูบแต่เลิกแล้ว</label>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-outline-primary" name="submit_insert_general" value="Next">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>