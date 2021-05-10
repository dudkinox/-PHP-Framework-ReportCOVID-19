<?php $page = isset($_GET["page"]) ? $_GET["page"] : ''; ?>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white " id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="assets/img/brand/covidlogo.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php if ($page == "dashboard") { ?>
                            <a class="nav-link active" href="?page=dashboard">
                            <?php } else { ?>
                                <a class="nav-link" href="?page=dashboard">
                                <?php } ?>
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                                </a>
                    </li>
                    <li class="nav-item">
                        <?php if ($page == "profile") { ?>
                            <a class="nav-link active" href="?page=profile">
                            <?php } else { ?>
                                <a class="nav-link" href="?page=profile">
                                <?php } ?>
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">ข้อมูลทั่วไป</span>
                                </a>
                    </li>
                </ul>
                <hr class="my-3">
            </div>
        </div>
    </div>
</nav>