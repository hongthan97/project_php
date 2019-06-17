<?php 
if (isset($_SESSION['info'])) {
    $info = $_SESSION['info'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/img/icon.png">
    <?php 
    if (isset($_SESSION['info'])) {
        if ($_SESSION['info']['loai_tk']!='admin') {
            ?>
            <title>Flower Project</title>  
            <?php
        } else{
            ?>
            <title>Admin Page</title>
            <?php
        }
    } else {
        ?>
        <title>Admin Page</title>
        <?php
    }
    ?>
    
    <!-- Bootstrap Core CSS -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <link href="public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!-- Custom CSS -->
    <link href="public/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="public/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="public/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="public/css/css-chart/css-chart.css" rel="stylesheet">
    <link href="public/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="public/style/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/css/style_addnew.css">
    <!-- You can change the theme colors from here -->
    <link href="public/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" type="text/css" href="public/css/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="public/css/themify-icons/themify-icons.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php 
if (isset($_SESSION['info'])) {
    if ($_SESSION['info']['loai_tk']!='admin') {
        ?>
        <style type="text/css">
        #quan_li_nv{
            display: none;
        }
        #quan_li_hd{
            display: none;
        }
        #dieu_khien{
            display: none;
        }
        #thong_ke{
            display: none;
        }
    </style>
    <?php
}
}
?>
<style type="text/css">
label{
    font-size: 17px;
    color: #0288AD;
}
.page-header{
    color: #AA0000;
}
.error{
    color: #C60000;
}
</style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <h2 style="margin-bottom: 0px;color: white"><i class="mdi mdi-heart-pulse"></i><b>FLOw</b><i>ProJ</i></h2>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li style="margin-left: 30px; margin-top: 10px"> 
                                <div>
                                    <h5 style="color: white"><medium>Tháng <?= $info['month'] ?> này bạn lãi được:</medium></h5>
                                    <h4 style="color: white"><?= number_format($info['lai']).' VNĐ' ?></h4>
                                </div>
                            </li>


                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <?php 
                                if ($info['img']=='') {
                                    ?>
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/img_nv/user_empty.jpg" alt="user" class="profile-pic m-r-10" /><?= $info['ten_nv'] ?></a>
                                    <?php
                                } else {
                                    ?>
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/img_nv/<?= $info['img'] ?>" alt="user" class="profile-pic m-r-10" /><?= $info['ten_nv'] ?></a>
                                    <?php
                                }
                                ?>

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <br><div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li id="dieu_khien"> <a class="waves-effect waves-dark" href="index.php?mod=dashbroad" aria-expanded="false"><span class="hide-menu"><i class="mdi mdi-gauge"></i> Bảng điều khiển</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="index.php?mod=types&act=list" aria-expanded="false"><span class="hide-menu"><i class="mdi mdi-content-copy"></i> Quản lí loại sản phẩm</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="index.php?mod=products&act=list" aria-expanded="false"><span class="hide-menu"><i class="mdi mdi-menu"></i> Quản lí sản phẩm</span></a>
                            </li>
                            <li id="quan_li_nv"> <a class="waves-effect waves-dark" href="index.php?mod=employees&act=list" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Quản lí nhân viên</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="index.php?mod=customer&act=list" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu"> Quản lí khách hàng</span></a>
                            </li>
                            <li id="quan_li_hd"> <a class="waves-effect waves-dark" href="index.php?mod=bill&act=list" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span class="hide-menu"> Quản lí hóa đơn</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="index.php?mod=sale&act=createbill" aria-expanded="false"><i class="mdi mdi-shopping"></i><span class="hide-menu"> Quản lí bán hàng</span></a>
                            </li>
                            <li id="thong_ke"> <a class="waves-effect waves-dark" href="index.php?mod=statistic" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu"> Quản lí thống kê</span></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
                <!-- Bottom points-->
                <div class="sidebar-footer">
                    <!-- item--><a href="index.php?mod=settings&act=settings" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                    <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                    <!-- item--><a href="index.php?mod=logout" class="link" data-toggle="tooltip" title="Logout"><i style="color: red" class="mdi mdi-power"></i></a> </div>
                    <!-- End Bottom points-->
                </aside>
                <!-- ============================================================== -->
                <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page wrapper  -->
                <!-- ============================================================== -->
                <div class="page-wrapper">
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->
                    <div class="container-fluid">
                        <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <div class="row page-titles">
