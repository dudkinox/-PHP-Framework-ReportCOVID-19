<?php
$api = isset($_GET["api"]) ? $_GET["api"] : '';
if ($api == "search") {
} else if ($api == "genaral") {
    if (isset($_POST['submit_insert_profile'])) {
        $sCode = $_POST['code'];
        $sId_card = $_POST['ID_card'];
        $sAge_year = $_POST['Age_year'];
        $sAge_month = $_POST['Age_month'];
        $sNationality = $_POST['nationality'];
        $sName = $_POST['Name'];
        $sLname = $_POST['LName'];
        $sCareer = $_POST['Career'];


        $sSex = $_POST['sex'];
        if ($sSex == "Male") {
            $sMale = 1;
            $sFemale = 0;
        } else {
            $sMale = 0;
            $sFemale = 1;
        }
        $sSpregnant = $_POST['Spregnant'];
        if ($sSpregnant == "No") {
            $sNo_pregnant = 1;
            $sPregnant = 0;
        } else {
            $sNo_pregnant = 0;
            $sPregnant = 1;
        }
        $sPregnantNO = $_POST['pregnantNO'];
        $sMountOfPre = $_POST['MountOfPre'];
        $sWork_station = $_POST['Work_Edu'];
        $sPhonenumber = $_POST['PhoneNo'];
        $sMochana_Phone = $_POST['Mochana_Phone'];
        $sH_number = $_POST['H_number'];
        $sProvince = $_POST['Province'];
        $sDistrict = $_POST['District'];
        $sAmphur = $_POST['Amphur'];
        $sRoad = $_POST['Road'];
        $sType_house = $_POST['type_hourse'];
        if ($sType_house == "House") {
            $sHouse = 1;
            $sOtherAdd = 0;
        } else {
            $sHouse = 0;
            $sOtherAdd = 1;
        }
        $sDiseases = $_POST['Diseases'];

        $sType_smoke = $_POST['type_smoke'];
        if ($sType_smoke == "No_smoking") {
        }

        $sNo_Smoke = $_POST['No_Smoke'];
        $sSmoke = $_POST['Smoke'];
        $sStop_smoke = $_POST['Stop_smoke'];
        $INSERT = "INSERT INTO General_Data 
                (
                Code,
                ID_card,
                Name,
                LName, 
                Career,
                Work_Edu,
                PhoneNo,
                Mochana_Phone,
                Age_year,
                Age_month,
                Male,
                Female,
                No_pregnant,
                pregnant,
                pregnantNO,
                MountOfPre,
                House,
                OtherAdd,
                H_number,
                Moo, 
                Village,
                Side_road,
                Road,
                District,
                Amphur,
                Province,
                Diseases,
                No_Smoke,
                Smoke,
                Stop_smoke
                )
    VALUES ('" . $sCode . "' 
    ,'" . $sId_card . "'
    ,'" . $sAge_year . "'
    ,'" . $sAge_month . "'
    ,'" . $sNationality . "'
    ,'" . $sName . "'
    ,'" . $sLname . "'
    ,'" . $sCareer . "'
    ,'" . $sMale . "'
    ,'" . $sFemale . "'
    ,'" . $sNo_pregnant . "'
    ,'" . $sPregnant . "'
    ,'" . $sPregnantNO . "'
    ,'" . $sMountOfPre . "'
    ,'" . $sWork_station . "'
    ,'" . $sPhonenumber . "'
    ,'" . $sMochana_Phone . "'
    ,'" . $sH_number . "'
    ,'" . $sProvince . "'
    ,'" . $sDistrict . "'
    ,'" . $sAmphur . "'
    ,'" . $sRoad . "'
    ,'" . $sType_house . "'
    ,'" . $sDiseases . "'
    ,'" . $sNo_Smoke . "'
    ,'" . $sSmoke . "'
    ,'" . $sStop_smoke  . "')";
        if ($conn->query($sql) === TRUE) {
            // เมื่อเข้า
        } else {
            // error
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
