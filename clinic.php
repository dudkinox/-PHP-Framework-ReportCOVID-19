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
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- create -->
  <link rel="stylesheet" href="Themes/main.css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white " id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/covidlogo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ข้อมูลทั่วไป</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clinic.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ข้อมูลทางคลีนิค</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clinicPCR.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ข้อมูลทางคลีนิคผลตรวจPCR</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clinicAntibody.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ข้อมูลทางคลีนิคผลตรวจAntibody</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vaccine.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ประวัติการได้รับวัคซีน</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">ประวัติเสี่ยง</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="details.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">รายละเอียดเหตุการณ์</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">การค้นหาผู้สัมผัส</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom bg-primary1">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-image: url(assets/img/theme/medic.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <!-- Header container -->

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">


            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <h1>REPORT COVID-19</h1>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">ผู้ติดเชื้อ</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">ระหว่างรักษา</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">หายแล้ว</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


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
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Com-sci CRU</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">จัดทำโดย วิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏจันทรเกษม</a>
              </li>

            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <!-- crate javascript -->
  <script src="js/main.js"></script>
</body>

</html>