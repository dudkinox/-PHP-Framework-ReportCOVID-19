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

    $general_data = "INSERT INTO General_Data
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

    $Activity_After_14 = "INSERT INTO `Activity_After_14`(`Code`, `AA14_Order`, `AA14_Date`, `AA14_Activity`, `AA14_Number`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]')";

    $Activity_Before_14 = "INSERT INTO Activity_Before_14(Code, AB14_Order, AB14_Date, AB14_Activity, AB14_Number) 
                            VALUES ('" . $sCode . "','','','','')";

    $CBC = "INSERT INTO CBC(Code, Order_of_CBC, CBC_Date, CBC_Hb, CBC_Hct, CBC_Platelet_Count, WBC, WBC_N, WBC_L, WBC_Atyp_Lymph, WBC_Mono, WBC_Orther) 
                            VALUES ('" . $sCode . "','','','','','','','','','','','')";

    $Clinic_Data = "INSERT INTO `Clinic Data`(Code, Start_Date_sick, Strat_Date_Treatment, First_Hospital, FH_Province, Present_Hospital, PH_Province, Fever, Temperature, O2Sat, Ventilator, Cough, Sore_throat, Muscle_pain, Snot, Phlegm, Difficult_breathing, Headache, Liquid, Not_smell, Unflavored, Conjunctivitis, Rash, Orther) 
                            VALUES ('" . $sCode . "','','','','','','','','','','','','','','','','','','','','','','','')";

    $Close_Person = "INSERT INTO `Close_Person`(`Code`, `CS_Order`, `CS_Name`, `CS_Sex`, `CS_Age`, `CS_Address`, `CS_Phone`, `CS_Date`, `CS_Stance`, `CS_YN_ Patient`, `CS_Protected`, `CS_Vaccine_Date`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')";

    $History_of_Risk = "INSERT INTO `History_of_Risk`(`Code`, `Living_Risk_Area`, `City_ Risk_Area`, `Country_ Risk_Area`, `Date_in_Thailand`, `Airliner`, `Flights`, `Treat_or_Visit`, `Contact_ Patient`, `Patient_Name`, `Career_Contact`, `Risk_area`, `Area_Name`, `Pneumonia`, `Pneumonia_Severity`, `Medical_personel`, `Other_Risk`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]')";

    $History_Vacin_Covid19 = "INSERT INTO `History_Vacin_Covid19`(`Code`, `Vaccine_never`, `Vaccine_ever`, `Vaccine_Record`, `Vaccine_Record_Not`, `Vaccine_1_date`, `Vaccine_name1`, `Station_1`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')";

    $Influenza_test = "INSERT INTO `Influenza_test`(`Code`, `Method_test`, `Negative_test`, `Possitive_test`, `Flu_A`, `Flu_B`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

    $Patient_status = "INSERT INTO `Patient_status`(`Code`, `Get_well`, `Healing`, `Died`, `Deliver_to_hospital`, `Other`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

    $Patient_type = "INSERT INTO Patient_type(Code,Outpatient,Inpatient,Admit_Date,Diagnosis)
                            VALUES('" . $sCode . "','','','','')";

    $Rash = "INSERT INTO Rash(Code,Rash_active,	Position_Rash1,Position_Rash2,Position_Rash3,Position_Rash4)
                            VALUES('" . $sCode . "','','','','','')";

    $SARS_CoV_2_Antibidy = "INSERT INTO `SARS_CoV_2_Antibidy`(`Code`, `Order_Antibidy`, `Date_Antibidy`, `Example_type_Antibidy`, `Station_Antibidy`, `Result_Antibidy`) 
                            VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

    $SARS_CoV_2_PCR = "INSERT INTO `SARS_CoV_2_PCR`(`Code`, `Order_PCR`, `Date_PCR`, `Example_type_PCR`, `Station_PCR`, `Detected_PCR`, `Not_Detected_PCR`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";

    $X_ray = "INSERT INTO `X-ray`(`Code`, `Xrey_No`, `Xrey_Yes`, `Xrey_Date`, `Xrey_Result`) 
                            VALUES ('" . $sCode . "','[value-2]','[value-3]','[value-4]','[value-5]')";



    if ($conn->query($general_data) === TRUE) {
        if ($conn->query($Activity_After_14) === TRUE) {
            if ($conn->query($Activity_Before_14) === TRUE) {
                if ($conn->query($CBC) === TRUE) {
                    if ($conn->query($Clinic_Data) === TRUE) {
                        if ($conn->query($Close_Person) === TRUE) {
                            if ($conn->query($History_of_Risk) === TRUE) {
                                if ($conn->query($History_Vacin_Covid19) === TRUE) {
                                    if ($conn->query($Influenza_test) === TRUE) {
                                        if ($conn->query($Patient_status) === TRUE) {
                                            if ($conn->query($Patient_type) === TRUE) {
                                                if ($conn->query($Rash) === TRUE) {
                                                    if ($conn->query($SARS_CoV_2_PCR) === TRUE) {
                                                        if ($conn->query($X_ray) === TRUE) {
                                                            if ($conn->query($SARS_CoV_2_Antibidy) === TRUE) {
                                                                $_SESSION["alert_insert_general"] = 1;
                                                                header('location: ../../');
                                                            } else {
                                                                // error
                                                                echo "Error: " . $SARS_CoV_2_Antibidy . "<br>" . $conn->error;
                                                            }
                                                        } else {
                                                            // error
                                                            echo "Error: " . $X_ray . "<br>" . $conn->error;
                                                        }
                                                    } else {
                                                        // error
                                                        echo "Error: " . $SARS_CoV_2_PCR . "<br>" . $conn->error;
                                                    }
                                                } else {
                                                    // error
                                                    echo "Error: " . $Rash . "<br>" . $conn->error;
                                                }
                                            } else {
                                                // error
                                                echo "Error: " . $Patient_type . "<br>" . $conn->error;
                                            }
                                        } else {
                                            // error
                                            echo "Error: " . $Patient_status . "<br>" . $conn->error;
                                        }
                                    } else {
                                        // error
                                        echo "Error: " . $Influenza_test . "<br>" . $conn->error;
                                    }
                                } else {
                                    // error
                                    echo "Error: " . $History_Vacin_Covid19 . "<br>" . $conn->error;
                                }
                            } else {
                                // error
                                echo "Error: " . $History_of_Risk . "<br>" . $conn->error;
                            }
                        } else {
                            // error
                            echo "Error: " . $Close_Person . "<br>" . $conn->error;
                        }
                    } else {
                        // error
                        echo "Error: " . $Clinic_Data . "<br>" . $conn->error;
                    }
                } else {
                    // error
                    echo "Error: " . $CBC . "<br>" . $conn->error;
                }
            } else {
                // error
                echo "Error: " . $Activity_Before_14 . "<br>" . $conn->error;
            }
        } else {
            // error
            echo "Error: " . $Activity_After_14 . "<br>" . $conn->error;
        }
    } else {
        // error
        echo "Error: " . $general_data . "<br>" . $conn->error;
    }
}
