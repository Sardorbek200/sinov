<?php
$ega=getAll('admin');
foreach($ega as $k){
    $arr[]=$k;
}
// print_r($_SESSION);
if(isset($_GET['log']) && $_GET['log']=='log'){
    session_destroy();
}
// print_r($_SESSION['img']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=$path['path']['url']?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=$path['path']['url']?>/darkpan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=$path['path']['url']?>/darkpan/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=$path['path']['url']?>/darkpan/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=$path['path']['url']?>/darkpan/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?=$path['path']['url']?><?=(isset($_SESSION['img']) && $_SESSION['img'] != '') ? $_SESSION['img'] : '/darkpan/view/vew/admin.png' ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?=(isset($_SESSION['ism']))? $_SESSION['ism'] : 'Nomalum' ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="?page=main"   class="nav-item nav-link <?=(!isset($_GET['page']) || $_GET['page'] == 'main')? 'active': '' ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="?page=button" class="nav-item nav-link <?=(isset($_GET['page']) && $_GET['page'] == 'button')? 'active': '' ?>"><i class="bi bi-menu-button-fill me-2"></i>Buttons</a>
                    <a href="?page=typegrap" class="nav-item nav-link <?=(isset($_GET['page']) && $_GET['page'] == 'typegrap')? 'active': '' ?>"><i class="bi bi-card-text me-2"></i>Typography</a>
                    <a href="?page=form"   class="nav-item nav-link <?=(isset($_GET['page']) && $_GET['page'] == 'form')? 'active': '' ?>"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="?page=table"  class="nav-item nav-link <?=(isset($_GET['page']) && $_GET['page'] == 'table')? 'active': '' ?>"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="?page=singup" class="nav-item nav-link <?=(isset($_GET['page']) && $_GET['page'] == 'singup')? 'active': '' ?>"><i class="bi bi-person-circle me-2"></i>Sing Up</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?=$path['path']['url']?><?=(isset($_SESSION['img']) && $_SESSION['img'] != '') ? $_SESSION['img'] : '/darkpan/view/vew/admin.png' ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"><?=(isset($_SESSION['ism']))? $_SESSION['ism'] : 'Nomalum' ?> send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?=$path['path']['url']?><?=(isset($_SESSION['img']) && $_SESSION['img'] != '') ? $_SESSION['img'] : '/darkpan/view/vew/admin.png' ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"><?=(isset($_SESSION['ism']))? $_SESSION['ism'] : 'Nomalum' ?> send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?=$path['path']['url']?><?=(isset($_SESSION['img']) && $_SESSION['img'] != '') ? $_SESSION['img'] : '/darkpan/view/vew/admin.png' ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"><?=(isset($_SESSION['ism']))? $_SESSION['ism'] : 'Nomalum' ?> send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?=$path['path']['url']?><?=(isset($_SESSION['img']) && $_SESSION['img'] != '') ? $_SESSION['img'] : '/darkpan/view/vew/admin.png' ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?=(isset($_SESSION['ism']))? $_SESSION['ism'] : 'Nomalum' ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="?page=singup" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="?page=singup&log=log" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->