<?php
session_start();
require("../../database/connection.php");
$api = isset($_GET["api"]) ? $_GET["api"] : '';
if ($api == "search") {
} else if ($api == "genaral") {
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
    $sPregnantNO = $_POST['pregnantNO'] ?? 0;

    $sMountOfPre = $_POST['MountOfPre'] ?? 0;
    $sWork_Edu = $_POST['Work_Edu'];
    $sPhoneNo = $_POST['PhoneNo'];
    $sMochana_Phone = $_POST['Mochana_Phone'];
    $sH_number = $_POST['H_number'];

    $sMoo = $_POST['Moo'];
    $sVillage = $_POST['Village'];
    $sSide_road  = $_POST['Side_road'];

    $sProvince = $_POST['Province'];
    $sPostalcode = $_POST['postalcode'];
    $sDistrict = $_POST['District'];
    $sAmphur = $_POST['Amphur'];
    $sRoad = $_POST['Road'];
    $sType_house = $_POST['type_house'];
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
        $sNo_Smoke = 1;
        $sSmoke = 0;
        $sStop_smoke = 0;
    } else if ($sType_smoke == "Smoke") {
        $sNo_Smoke = 0;
        $sSmoke = 1;
        $sStop_smoke = 0;
    } else {
        $sNo_Smoke = 0;
        $sSmoke = 0;
        $sStop_smoke = 1;
    }

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
                Postalcode,
                Diseases,
                No_Smoke,
                Smoke,
                Stop_smoke
                )
    VALUE ('" . $sCode . "'
    ,'" . $sId_card . "'
    ,'" . $sName . "'
    ,'" . $sLname . "'
    ,'" . $sCareer . "'
    ,'" . $sWork_Edu . "'
    ,'" . $sPhoneNo . "'
    ,'" . $sMochana_Phone . "'
    ,'" . $sAge_year . "'
    ,'" . $sAge_month . "'
    ,'" . $sMale . "'
    ,'" . $sFemale . "'
    ,'" . $sNo_pregnant . "'
    ,'" . $sPregnant . "'
    ,'" . $sPregnantNO . "'
    ,'" . $sMountOfPre . "'
    ,'" . $sHouse . "'
    ,'" . $sOtherAdd . "'
    ,'" . $sH_number . "'
    ,'" . $sMoo . "'
    ,'" . $sVillage . "'
    ,'" . $sSide_road . "'
    ,'" . $sRoad . "'
    ,'" . $sDistrict . "'
    ,'" . $sAmphur . "'
    ,'" . $sProvince . "'
    ,'" . $sPostalcode . "'
    ,'" . $sDiseases . "'
    ,'" . $sNo_Smoke . "'
    ,'" . $sSmoke . "'
    ,'" . $sStop_smoke . "')";

    if ($conn->query($INSERT) === TRUE) {
        $_SESSION["alert_insert_general"] = 1;
        header('location: ../../');
    } else {
        // error
        echo "Error: " . $INSERT . "<br>" . $conn->error;
    }
}
