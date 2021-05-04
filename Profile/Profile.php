<?php session_start();
require('database/connection.php');
$sql = "SELECT * FROM `General_Data` WHERE Code = '" . $code . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql_provinces = "SELECT * FROM provinces";
$query = mysqli_query($conn, $sql_provinces);
?>
<!-- value -->
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
                            <input type="text" id="code" name="code" class="form-control text-dark" value="<?php echo $row['Code']; ?>" placeholder="รหัสผู้ป่วย">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="ID_card">เลขบัตรประชาชน</label>
                            <input type="number" id="ID_card" name="ID_card" class="form-control text-dark" value="<?php echo $row['ID_card']; ?>" placeholder="เลขบัตรประชาชน">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="year_age">อายุปี</label>
                            <input type="text" id="Age_year" name="Age_year" class="form-control text-dark" value="<?php echo $row['Age_year']; ?>" placeholder="อายุ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="Age_month">อายุเดือน</label>
                            <input type="text" id="Age_month" name="Age_month" class="form-control text-dark" value="<?php echo $row['Age_month']; ?>" placeholder="อายุ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="input-first-name">ชื่อ</label>
                            <input type="text" id="Name" name="Name" class="form-control text-dark" value="<?php echo $row['Name']; ?>" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-control-label" for="input-last-name">นามสกุล</label>
                            <input type="text" class="form-control text-dark" id="LName" name="LName" value="<?php echo $row['LName']; ?>" placeholder="นามสกุล">
                        </div>
                        <div class="form-group col-12">
                            <label class="form-control-label" for="input-first-name">อาชีพ(ระบุลักษณะงานที่ทำอย่างละเอียด เช่น บุคลากรทางการแพทย์ เจ้าหน้าที่ที่สัมผัสกับนักท่องเที่ยว)</label>
                            <input type="text" id="Career" name="Career" class="form-control text-dark" placeholder="อาชีพ" value="<?php echo $row['Career']; ?>" placeholder="อาชีพ">
                        </div>
                        <div class="form-group col-6">
                            <h5>เพศ</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="Male" value="Male">
                                <label class="form-check-label" for="Male">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="Female" value="Female">
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
                                    <input type="text" class="form-control text-dark" id="pregnantNO" name="pregnantNO" value="<?php echo $row['pregnantNO']; ?>" placeholder="ครั้งที่">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="MountOfPre">อายุครรภ์</label>
                                    <input type="text" class="form-control text-dark" id="MountOfPre" name="MountOfPre" value="<?php echo $row['MountOfPre']; ?>" placeholder="อายุครรรภ์ เป็น สัปดาห์">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-control-label" for="Work_Edu">สถานที่ทำงาน/สถานที่ศึกษา</label>
                            <input type="text" id="Work_Edu" name="Work_Edu" class="form-control text-dark" value="<?php echo $row['Work_Edu']; ?>" placeholder="สถานที่ทำงาน/สถานที่ศึกษา">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-control-label" for="PhoneNo">เบอร์โทรศัพท์ที่ติดต่อได้</label>
                            <input type="text" id="PhoneNo" name="PhoneNo" class="form-control text-dark" value="<?php echo $row['PhoneNo']; ?>" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                        </div>
                        <div class="form-group col-lg-12">
                            <label class="form-control-label" for="Mochana_Phone">เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน"หมอชนะ"</label>
                            <input type="text" id="Mochana_Phone" name="Mochana_Phone" class="form-control text-dark" value="<?php echo $row['Mochana_Phone']; ?>" placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน">
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
                        <input type="text" class="form-control text-dark" id="OtherAdd" name="OtherAdd" value="<?php echo $row['OtherAdd']; ?>" placeholder="เช่น คอนโด">
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="form-control-label" for="H_number">บ้านเลขที่</label>
                            <input class="form-control text-dark" id="H_number" name="H_number" value="<?php echo $row['H_number']; ?>" placeholder=" ที่อยู่" type="text">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Moo">หมู่ที่</label>
                            <input class="form-control text-dark" id="Moo" name="Moo" value="<?php echo $row['Moo']; ?>" placeholder="หมู่ที่" type="text">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Village">หมู่บ้าน</label>
                            <input class="form-control text-dark" id="Village" name="Village" value="<?php echo $row['Village']; ?>" placeholder="หมู่บ้าน" type="text">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Road">ถนน</label>
                            <input type=" text" class="form-control text-dark" id="Road" name="Road" value="<?php echo $row['Road']; ?>" placeholder="ถนน">
                        </div>
                        <div class="form-group col-4">
                            <label class="form-control-label" for="Side_road">ซอย</label>
                            <input class=" form-control text-dark" id="Side_road" name="Side_road" value="<?php echo $row['Side_road']; ?>" placeholder="ซอย" type="text">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Province">จังหวัด</label>
                            <select class="form-control text-dark" name="Province" id="Province">
                                <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
                                <?php foreach ($query as $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="Amphur">อำเภอ</label>
                            <select class="form-control text-dark" name="Amphur" id="Amphur"></select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="District">ตำบล</label>
                            <select class="form-control text-dark" name="District" id="District"></select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="postalcode">รหัสไปรษณี</label>
                            <input type="text" class="form-control text-dark" id="postalcode" name="postalcode" value="<?php echo $row['Postalcode']; ?>" placeholder="รหัสไปรษณี">
                        </div>
                    </div>
                </div>
                <!-- ประวัติโรคประจำตัว -->
                <hr class="my-4" />
                <h6 class="h2 mb-4">ประวัติโรคประจำตัว</h6>
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">โรคประจำตัว</label>
                        <textarea rows="4" class="form-control my-3 text-dark" placeholder="กรอกข้อมูลโรคประจำตัว" name="Diseases"><?php echo $row['Diseases']; ?></textarea>
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
                        <input type="submit" class="btn btn-outline-primary" name="submit_update_general" value="Next">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- script -->
<script>
    document.getElementById("Male").checked = <?php echo $row["Male"]; ?>;
    document.getElementById("Female").checked = <?php echo $row["Female"]; ?>;

    document.getElementById("No_pregnant").checked = <?php echo $row["No_pregnant"]; ?>;
    document.getElementById("pregnant").checked = <?php echo $row["pregnant"]; ?>;

    if (document.getElementById("pregnant").checked == <?php echo $row["pregnant"]; ?>) {
        show_data();
    }

    document.getElementById("house").checked = <?php echo $row["House"]; ?>;
    document.getElementById("other").checked = <?php echo $row["OtherAdd"]; ?>;


    document.getElementById("No_smoking").checked = <?php echo $row["No_Smoke"]; ?>;
    document.getElementById("Smoke").checked = <?php echo $row["Smoke"]; ?>;
    document.getElementById("Stop_smoke").checked = <?php echo $row["Stop_smoke"]; ?>;
</script>