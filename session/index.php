<?php 
session_start();
$_SESSION["code"] = isset($_GET["code"]) ? $_GET["code"] : '';
$page = isset($_GET["page"]) ? $_GET["page"] : '';
switch($page){
case "profile":
    echo '<script>window.location.href = "../index_data.php?page=profile";</script>';
    break;
}
