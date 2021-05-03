<div class="col-xl-8 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">ข้อมูลคลีนิค</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">ตั่งค่า</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form>
                <h6 class="heading-small text-muted mb-4">ประวัติส่วนตัว</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">วันที่เริ่มป่วย(วัน/เดือน/ปี)</label>
                                <input type="date" id="datemax" name="datemax" max="2021-12-31">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">วันที่เข้ารับการรักษาครั้งแรก(วัน/เดือน/ปี)</label>
                                <input type="date" id="datemax" name="datemax" max="2021-12-31">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <div class="form-group">
                                <label class="form-control-label">ชื่อสถานพยาบาลเข้ารับการรักษาครั้งแรก</label>
                                <input type="email" id="firsttime" class="form-control" placeholder="ชื่อ สถานพยาบาล">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <div class="form-group">
                                <label class="form-control-label">จังหวัด</label>
                                <input type="email" id="county" class="form-control" placeholder="จังหวัด">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">ชื่อสถานพยาบาลเข้ารับการรักษาในปัจจุบัน</label>
                                <input type="text" id="instant" class="form-control" placeholder="ชื่อสถานพยาบาลในปัจจุบัน">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">จังหวัด</label>
                                <input type="text" class="county_instant" placeholder="จังหวัด">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="myCheck" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">ไข้</label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">อุณหภูมิแรกรับ</label>
                                <input type="text" id="temperature" class="form-control" placeholder="°C">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">O<sub>2</sub> Sat</label>
                                <input type="text" id="sat" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
                                <label class="form-check-label" for="inlineCheckbox2">ใส่เครื่องช่วยหายใจ</label>
                            </div><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option6">
                                <label class="form-check-label" for="inlineCheckbox5">ปวดกล้ามเนื้อ</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option5">
                                <label class="form-check-label" for="inlineCheckbox4">เจ็บคอ</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                                <label class="form-check-label" for="inlineCheckbox3">ไอ</label>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option7">
                                <label class="form-check-label" for="inlineCheckbox6">มีน้ำมูก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option8">
                                <label class="form-check-label" for="inlineCheckbox7">มีเสมหะ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option9">
                                <label class="form-check-label" for="inlineCheckbox8">หายใจลำบาก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option10">
                                <label class="form-check-label" for="inlineCheckbox9">ปวดศรีษะ</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option11">
                                <label class="form-check-label" for="inlineCheckbox10">ถ่ายเหลว</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option12">
                                <label class="form-check-label" for="inlineCheckbox11">จมูกไม่ได้กลิ่น</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option13">
                                <label class="form-check-label" for="inlineCheckbox12">ลิ้นไม่รับรส</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option14">
                                <label class="form-check-label" for="inlineCheckbox13">ตาแดง</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="myCheck1" value="option15">
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
                                <input class="form-check-input" type="checkbox" id="myCheck2" value="option16" onclick="myFunction2()">
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
                                <input class="form-check-input" type="radio" name="did" id="didnt" value="0" onclick="close_data1()">
                                <label class="form-check-label" for="didnt" onclick="close_data1()">ไม่ได้ทำ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="did" id="did" value="1" onclick="show_data1()">
                                <label class="form-check-label" for="did" onclick="show_data1()">ทำ</label>
                            </div>
                        </div>

                        <div class="form-check form-check-inline" id="hide" style="display : none">
                            <div class="col-lg-12">
                                <br>
                                <div class="form-group">
                                    <label class="form-control-label">เมื่อวันที่</label>
                                    <input type="date" id="datemax" name="datemax" max="2021-12-31">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">ระบุผล</label>
                                    <input type="text" class="form-control" placeholder="ระบุผล">
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-12">
                            <div class="form-group">
                                <br>
                                <label class="form-control-label">ผล Hd</label>
                                <input type="text" id="hd" class="form-control" placeholder="g/dL">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Hct</label>
                                <input type="text" id="Hct" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Platelet count</label>
                                <input type="text" id="Platelet" class="form-control" placeholder="x10*3">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">WBC</label>
                                <input type="text" id="WBC" class="form-control" placeholder="%">
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
                <h6 class="heading-small text-muted mb-4">ประเทภผู้ป่วย</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">ประเทภผู้ป่วย</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="patient" id="patient" value="option1">
                                    <label class="form-check-label" for="patient">ผู้ป่วยนอก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="patient" id="patient1" value="option2">
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
                                    <input class="form-check-input" type="radio" name="status" id="status" value="option1">
                                    <label class="form-check-label" for="status">หายแล้ว</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status1" value="option1">
                                    <label class="form-check-label" for="status1">ยังรักษาอยู่</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status2" value="option1">
                                    <label class="form-check-label" for="status2">เสียชีวิต</label>
                                </div></br>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status1" id="status3" value="option1">
                                    <label class="form-check-label" for="status3">ส่งตัวไป รพ.</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="โรงพยาบาล">
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status1" id="status4" value="option1">
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