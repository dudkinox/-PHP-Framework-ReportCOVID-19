<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Covid-19</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- create -->
  <link rel="stylesheet" href="Themes/main.css">
  <!-- create js -->
  <script src="js/main.js"></script>
</head>

<body>

  <!-- Sidenav -->
  <?php include 'component/menu.php'; ?>
  <?php $page = isset($_GET["page"]) ? $_GET["page"] : ''; ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <?php include 'component/head.php'; ?>
    <div class="container-fluid mt--6">
      <div class="row">
        <?php include 'component/Alert.php'; ?>
        <?php
        if ($page == "profile") {
          include 'component/Report_Covid.php';
          include 'Profile/Profile.php';
        } else if ($page == "dashboard") {
          include 'component/content.php';
        } else if ($page == "clinic") {
          include 'component/Report_Covid.php';
          include 'Clinic/Clinic.php';
        } else if ($page == "clinicPCR") {
          include 'component/Report_Covid.php';
          include 'component/content.php';
        } else if ($page == "clinicAntibody") {
          // include 'component/Report_Covid.php';
          // include 'ClinicAntibody/ClinicAntibody.php';
        } else if ($page == "vaccine") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else if ($page == "history") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else if ($page == "details") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else if ($page == "search") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else if ($page == "login") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else if ($page == "register") {
          // include 'component/Report_Covid.php';
          // include 'component/content.php';
        } else {
          // include 'component/Report_Covid.php';
          include 'component/content.php';
        }
        ?>
        <!-- Footer -->
      </div>
      <?php include 'component/Footer.php';
      ?>
    </div>
  </div>

  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>