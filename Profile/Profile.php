<?php session_start();
require('database/connection.php');
$sql = "SELECT * FROM `General_Data` WHERE Code = '" . $code . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql_provinces = "SELECT * FROM provinces";
$query = mysqli_query($conn, $sql_provinces);
?>
<div class="row">
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">ลงทะเบียนผู้ป่วยใหม่</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="Profile/API/backend.php?api=genaral" method="POST">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Code">SAT CODE</label>
                                    <input type="text" id="Code" name="Code" value="<?php echo $row["Code"]; ?>" class="form-control" placeholder="รหัสผู้ป่วย">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="ID_card">เลขบัตรประชาชน/หนังสือเดินทาง</label>
                                    <input type="text" id="ID_card" name="ID_card" value="<?php echo $row["ID_card"]; ?>" class=" form-control" placeholder="เลขบัตรประชาชน">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button type="button" style="padding-block: 12px;padding-left: 120px;padding-right: 120px;margin-left: 25%;margin-top: 30px;display: block;" class="btn btn-primary">ตรวจสอบข้อมูลซ้ำซ้อน</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Refer">ลำดับ Refer</label>
                                    <input type="text" id="Refer" name="Refer" value="<?php echo $row["Refer"]; ?>"" class=" form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Date_report">วันที่รายงาน</label>
                                    <input class="form-control" type="date" id="Date_report" value="<?php echo $row["Date_report"]; ?>" name="Date_report" max="2022-12-31" />
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Name">ชื่อ</label>
                                    <input type="text" id="Name" name="Name" value="<?php echo $row["Name"]; ?>" class="form-control" placeholder="ชื่อ">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="LName">นามสกุล</label>
                                    <input type="text" id="LName" name="LName" value="<?php echo $row["LName"]; ?>" class="form-control" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="sex">เพศ</label>
                                    <select class="form-control" name="sex" id="sex">
                                        <?php if ($row["Male"] == "" && $row["Female"] == "") { ?>
                                            <option selected hidden>กรุณาเลือก</option>
                                            <option value="Male">ชาย</option>
                                            <option value="Female">หญิง</option>
                                        <?php } else if ($row["Male"] == "1") { ?>
                                            <option value="Male">ชาย</option>
                                            <option value="Female">หญิง</option>
                                        <?php } else { ?>
                                            <option value="Female">หญิง</option>
                                            <option value="Male">ชาย</option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Age_year">อายุปี</label>
                                    <input type="number" id="Age_year" name="Age_year" value="<?php echo $row["Age_year"]; ?>" class="form-control" min="1" max="99" maxlength="2" placeholder="อายุปี">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Age_month">อายุเดือน</label>
                                    <input type="number" id="Age_month" name="Age_month" value="<?php echo $row["Age_month"]; ?>" class="form-control" min="1" max="99" maxlength="2" placeholder="อายุเดือน">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Nationality">สัญชาติ</label>
                                    <select class="form-control" name="Nationality" id="Nationality">
                                        <?php if ($row["Nationality"] == "") { ?>
                                            <option selected hidden>กรุณาเลือก</option>
                                            <option value="thai">ไทย</option>
                                            <option value="other">อื่นๆ</option>
                                        <?php } else if ($row["Nationality"] == "thai") { ?>

                                            <option value="thai">ไทย</option>
                                            <option value="other">อื่นๆ</option>
                                        <?php  } else {
                                        ?>
                                            <option value="other">อื่นๆ</option>
                                            <option value="thai">ไทย</option>

                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Career">อาชีพ</label>
                                    <input type="text" id="Career" value="<?php echo $row["Career"]; ?>" name="Career" class="form-control" placeholder="กรุณากรอก">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="PhoneNo">เบอร์โทร</label>
                                    <input type="text" id="PhoneNo" name="PhoneNo" class="form-control" value="<?php echo $row['PhoneNo']; ?>" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">ที่อยู่ขณะป่วย</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="H_number">บ้านเลขที่</label>
                                    <input class="form-control" id="H_number" name="H_number" value="<?php echo $row['H_number']; ?>" placeholder="ที่อยู่" type="text">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Moo">หมู่ที่</label>
                                    <input type="text" id="Moo" name="Moo" class="form-control" value="<?php echo $row['Moo']; ?>" placeholder="หมู่ที่">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Village">หมู่บ้าน</label>
                                    <input type="text" id="Village" name="Village" class="form-control" value="<?php echo $row['Village']; ?>" placeholder="หมู่บ้าน">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Road">ถนน</label>
                                    <input type="text" id="Road" name="Road" class="form-control" value="<?php echo $row['Road']; ?>" placeholder="ถนน">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="Side_road">ซอย</label>
                                    <input type="text" id="Side_road" name="Side_road" class="form-control" value="<?php echo $row['Side_road']; ?>" placeholder="ซอย">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label class="form-control-label" for="Province">จังหวัด</label>
                                <select class="form-control text-dark" name="Province" id="Province">
                                    <?php if ($row["Province"] == "") { ?>
                                        <option value="" selected hidden>-กรุณาเลือกจังหวัด-</option>
                                        <?php foreach ($query as $value) { ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                                        <?php } ?>
                                    <?php } else {
                                        foreach ($query as $value) {
                                            if ($value["id"] == $row["Province"]) {
                                                echo '<option value="' . $value["id"] . '" selected>' . $value["name_th"] . '</option>';
                                            } else {
                                                echo '<option value="' . $value["id"] . '">' . $value["name_th"] . '</option>';
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label class="form-control-label" for="Amphur">อำเภอ</label>
                                <select class="form-control text-dark" name="Amphur" id="Amphur">
                                    <?php
                                    if ($row["Amphur"] != "") {
                                        $sql_geography_id = "SELECT geography_id FROM provinces WHERE id = '" . $row["Province"] . "'";
                                        $result_geography_id = $conn->query($sql_geography_id);
                                        $row_geography_id = $result_geography_id->fetch_assoc();
                                        $sql_Amphur = "SELECT * FROM amphures WHERE province_id = '" . $row_geography_id["geography_id"] . "'";
                                        $query_Amphur = $conn->query($sql_Amphur);
                                        foreach ($query_Amphur as $value_Amphur) {
                                            if ($value_Amphur["id"] == $row["Amphur"]) {
                                                echo '<option value="' . $value_Amphur["id"] . '" selected>' . $value_Amphur["name_th"] . '</option>';
                                            } else {
                                                echo '<option value="' . $value_Amphur["id"] . '">' . $value_Amphur["name_th"] . '</option>';
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label class="form-control-label" for="District">ตำบล</label>
                                <select class="form-control text-dark" name="District" id="District">
                                    <?php
                                    if ($row["District"] != "") {
                                        $sql_District = "SELECT * FROM districts WHERE amphure_id= '" . $row["Amphur"] . "'";
                                        $query_District = $conn->query($sql_District);
                                        foreach ($query_District as $value_District) {
                                            if ($value_District["id"] == $row["District"]) {
                                                echo '<option value="' . $value_District["id"] . '" selected>' . $value_District["name_th"] . '</option>';
                                            } else {
                                                echo '<option value="' . $value_District["id"] . '">' . $value_District["name_th"] . '</option>';
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label class="form-control-label" for="postalcode">รหัสไปรษณี</label>
                                <input type="text" class="form-control text-dark" id="postalcode" name="Postalcode" value="<?php echo $row['Postalcode']; ?>" placeholder="รหัสไปรษณี">
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">ข้อมูลการรับการรักษา</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Cure">สถานะการรักษา</label>
                                    <input type="text" id="Cure" name="Cure" class="form-control" value="<?php echo $row['Curet']; ?>" placeholder=" กรุณาเลือก">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Location_admit">สถานที่ Admit</label>
                                    <input type="text" id="Location_admit" name="Location_admit" class="form-control" value="<?php echo $row['Location_admit']; ?>" placeholder=" กรุณาเลือก">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="Date_admit">วันที่เข้า Admit</label>
                                    <input class="form-control" type="date" id="Date_admit" name="Date_admit" value="<?php echo $row['Date_admit']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary" name="submit_insert_general" style="margin-left:auto;margin-right:auto;display:block;" value="บันทึกข้อมูล">
                </form>
            </div>
        </div>
    </div>
</div>