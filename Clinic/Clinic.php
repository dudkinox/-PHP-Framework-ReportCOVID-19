
<?php 
session_start();
require('database/connection.php');
$sql = "SELECT * FROM `Clinic Data` WHERE Code = '" . $_SESSION["code"] . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="col-xl-8 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">ข้อมูลคลินิก</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="#" class="btn btn-sm btn-primary">ตั่งค่า</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action = "Clinic/API/backend.php?api=clinic" method = "POST">
                <h6 class="heading-small text-muted mb-4">ประวัติส่วนตัว</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">วันที่เริ่มป่วย(วัน/เดือน/ปี)</label>
                                <input type="date" id="Start_Date_Sick" name="Start_Date_Sick" value = "<?php echo $row['Start_Date_Sick']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">วันที่เข้ารับการรักษาครั้งแรก(วัน/เดือน/ปี)</label>
                                <input type="date" id="Strat_Date_Treatment" name="Strat_Date_Treatment" value = "<?php echo $row['Strat_Date_Treatment']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <div class="form-group">
                                <label class="form-control-label">ชื่อสถานพยาบาลเข้ารับการรักษาครั้งแรก</label>
                                <input type="email" id="First_Hospital" name="First_Hospital" class="form-control" value = "<?php echo $row['First_Hospital']; ?>" placeholder="ชื่อ สถานพยาบาล">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <div class="form-group">
                                <label class="form-control-label">จังหวัด</label>
                                <input type="email" id="FH_Province" name="FH_Province" class="form-control"  value = "<?php echo $row['FH_Province']; ?>" placeholder = "จังหวัด">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">ชื่อสถานพยาบาลเข้ารับการรักษาในปัจจุบัน</label>
                                <input type="text" id="Present_Hospital" name="Present_Hospital" class="form-control" value = "<?php echo $row['Present_Hospital']; ?>" placeholder="ชื่อสถานพยาบาลในปัจจุบัน">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-control-label">จังหวัด</label>
                                <input type="email" id="PH_Province" name="PH_Province" class="form-control"  value = "<?php echo $row['PH_Province']; ?>" placeholder="จังหวัด">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Fever" name="Fever" value="อาการไข้">
                                <label class="form-check-label" for="inlineCheckbox1">อาการไข้</label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">อุณหภูมิแรกรับ</label>
                                <input type="text" id="Temperature" name="Temperature" class="form-control" placeholder="°C">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">ค่าO<sub>2</sub> Sat</label>
                                <input type="text" id="O2Sat" name="O2Sat" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Ventilator" name="Ventilator" value="option3">
                                <label class="form-check-label" for="inlineCheckbox2">ใส่เครื่องช่วยหายใจ</label>
                            </div><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Muscle_pain" name="Muscle_pain" value="option6">
                                <label class="form-check-label" for="inlineCheckbox5">ปวดกล้ามเนื้อ</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Sore_throat" name="Sore_throat" value="option5">
                                <label class="form-check-label" for="inlineCheckbox4">เจ็บคอ</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Cough" name="Cough" value="option4">
                                <label class="form-check-label" for="inlineCheckbox3">ไอ</label>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Snot" name="Snot" value="option7">
                                <label class="form-check-label" for="inlineCheckbox6">มีน้ำมูก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Phlegm" name="Phlegm" value="option8">
                                <label class="form-check-label" for="inlineCheckbox7">มีเสมหะ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Difficult_breathing" name="Difficult_breathing" value="option9">
                                <label class="form-check-label" for="inlineCheckbox8">หายใจลำบาก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Headache" name="Headache" value="option10">
                                <label class="form-check-label" for="inlineCheckbox9">ปวดศรีษะ</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Liquid" name="Liquid" value="option11">
                                <label class="form-check-label" for="inlineCheckbox10">ถ่ายเหลว</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Not_smell" name="Not_smell" value="option12">
                                <label class="form-check-label" for="inlineCheckbox11">จมูกไม่ได้กลิ่น</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Unflavored" name="Unflavored" value="option13">
                                <label class="form-check-label" for="inlineCheckbox12">ลิ้นไม่รับรส</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Conjunctivitis" name="Conjunctivitis" value="option14">
                                <label class="form-check-label" for="inlineCheckbox13">ตาแดง</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="rash" name="rash" value="option15">
                                <label class="form-check-label" for="myCheck1">ผื่น ตำแหน่ง</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="ตำแหน่ง">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Orther" name="Orther" value="option16" onclick="myFunction2()">
                                <label class="form-check-label" for="myCheck2" onclick="myFunction2()">อื่นๆ ระบุ</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ระบุ">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">เอกซเรย์ปอด(ครั้งแรก)</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Xrey_No" id="Xrey_No" value="0" onclick="close_data1()">
                                <label class="form-check-label" for="didnt" onclick="close_data1()">ไม่ได้ทำ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Xrey_Yes" id="Xrey_Yes" value="1" onclick="show_data1()">
                                <label class="form-check-label" for="did" onclick="show_data1()">ทำ</label>
                            </div>
                        </div>

                        <div class="form-check form-check-inline" id="hide" style="display : none">
                            <div class="col-lg-12">
                                <br>
                                <div class="form-group">
                                    <label class="form-control-label">เมื่อวันที่</label>
                                    <input type="date" id="Xrey_Date" name="Xrey_Date" max="2021-12-31">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">ระบุผล</label>
                                    <input type="text" id="Xrey_Result" name="Xrey_Result" class="form-control" placeholder="ระบุผล">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <br>
                                <label class="form-control-label">ค่า Hd</label>
                                <input type="text" id="CBC_Hb" name="CBC_Hb" class="form-control" placeholder="g/dL">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">ค่า Hct</label>
                                <input type="text" id="CBC_Hct" name="CBC_Hct" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">ค่า Platelet count</label>
                                <input type="text" id="CBC_Platelet_Count" name="CBC_Platelet_Count" class="form-control" placeholder="x10*3">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">ค่า WBC</label>
                                <input type="text" id="WBC" name="WBC" class="form-control" placeholder="%">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">ผลการตรวจ Influenzatest วิธีการตรวจ</label>
                                <input type="text" id="Influen" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flu" value="option7">
                                <label class="form-check-label" for="flu">Negative</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flu1" value="option8">
                                <label class="form-check-label" for="flu1">Positive</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flu2" value="option9">
                                <label class="form-check-label" for="flu2">Flu A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flu3" value="option10">
                                <label class="form-check-label" for="flu3">Flu B</label>
                            </div>
                        </div>







                    </div>



                </div>


                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">ประเภทผู้ป่วย</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Outpatient" id="Outpatient" value="option1">
                                    <label class="form-check-label" for="patient">ผู้ป่วยนอก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Inpatient" id="Inpatient" value="option1">
                                    <label class="form-check-label" for="patient">ผู้ป่วยใน</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Admit_Date" id="Admit_Date" value="option2">
                                    <label class="form-check-label" for="patient1">ผู้ป่วยใน admit วันที่ </label>
                                </div>

                                <input type="date" id="datemax" name="datemax" max="2021-12-31">

                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">การวินิจฉัยเบื้องต้น</label>

                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" placeholder="การวินิจฉัยเบื้องต้น">
                            </div><br>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">การให้ยารักษาโรคติดเชื้อไวรัสโคโรนา2019</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hai" id="heal" value="option1">
                                    <label class="form-check-label" for="heal">ไม่ให้</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hai" id="Received" value="option2">
                                    <label class="form-check-label" for="Received">ให้วันที่รับยาโดสแรก </label>
                                </div>

                                <input type="date" id="datemax" name="datemax" max="2021-12-31">
                                <br>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Remdesivir" value="option1">
                                    <label class="form-check-label" for="Remdesivir">Remdesivir</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Favipiravir" value="option1">
                                    <label class="form-check-label" for="Favipiravir">Favipiravir</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Lopinavir" value="option1">
                                    <label class="form-check-label" for="Lopinavir">Lopinavir/ritonavir</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Ritonavir" value="option1">
                                    <label class="form-check-label" for="Ritonavir">Ritonavir</label>
                                </div></br>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Darunavir" value="option1">
                                    <label class="form-check-label" for="Darunavir">Darunavir</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Chloroquine" value="option1">
                                    <label class="form-check-label" for="Chloroquine">Chloroquine/Hydroxychloroquine</label>
                                </div></br>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="other" value="option1">
                                    <label class="form-check-label" for="other">อื่นๆระบุ</label>
                                </div></br>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="อื่นๆ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">สถานะผู้ป่วย</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Get_well" id="Get_well" value="option1">
                                    <label class="form-check-label" for="status">หายแล้ว</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Healing" id="Healing" value="option1">
                                    <label class="form-check-label" for="status1">ยังรักษาอยู่</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Died" id="Died" value="option1">
                                    <label class="form-check-label" for="status2">เสียชีวิต</label>
                                </div></br>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Deliver_to_hospital" id="Deliver_to_hospital" value="option1">
                                    <label class="form-check-label" for="status3">ส่งตัวไป รพ.</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="โรงพยาบาล">
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Other" id="Other" value="option1">
                                    <label class="form-check-label" for="status4">อื่นๆระบุ</label>
                                </div></br>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="อื่นๆ">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>





                <br> <br>
                <input type="submit" class="btn btn-outline-primary" name="submit_insert_clinic" value="เพิ่มข้อมูล">
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("Fever").checked = <?php echo $row["Fever"]; ?>;
</script>