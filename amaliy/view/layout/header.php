<?php
$texts=getAll('tillar');
$val=[];
foreach($texts as $text ){
    $val[]=$text;    
}
if(isset($_GET['til'])){
    $til=$_GET['til'];
}
else{
    $til='en';
}
$imgs=getAll('img');
foreach ($imgs as $key) {
    $img[]=$key;
}
$a=getAll('users');
foreach($a as $c){
	if(isset($_SESSION['login'])){
		if($c['login'] == $_SESSION['login']){
			$_SESSION['id']=$c['id'];
		}else{
			$_SESSION['id']='mavjud emas';
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmzi</title>
    <meta content="" name="description">
    <link href="<?=$path['path']['url']?>/img/card-2.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="<?=$path['path']['url']?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$path['path']['url']?>/dist/wow.js">
    <link rel="stylesheet" href="<?=$path['path']['url']?>/main/main.css">
    <link rel="stylesheet" href="<?=$path['path']['url']?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$path['path']['url']?>/css/owl.theme.default.min.css">
    <style>
        .owl-stage{
            width: 3200px !important;
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="container bg-light px-0">
        <!-- Header start -->
        <header class="bg">
            <div class="row mr-0">
                <nav class="navbar navbar-expand-lg navbar-dark w-100 py-md-3 px-xl-5 p-0">
                    <div class="col-4 col-md-3 col-lg-2 ml-3 ml-md-2">
                         <a class="navbar-brand" href="#">
                            <img src="<?=$path['path']['url'].$img[23]['url']?>" width="140px">
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="text-right">
                            <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon icon-light"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse " id="navbar">
                            <div class="navbar-nav  d-flex justify-content-around w-100">
                                <a class="nav-item nav-link menu-hover <?=(!isset($_GET['page']) || $_GET['page']=='main') ? 'active': '' ?>" href="?page=main&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>"><?=$val[0][$til]?> <span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link menu-hover <?=(isset($_GET['page']) && $_GET['page']=='about') ? 'active': '' ?>" href="?page=about&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>"><?=$val[1][$til]?></a>
                                <a class="nav-item nav-link menu-hover <?=(isset($_GET['page']) && $_GET['page']=='blog') ? 'active': '' ?>" href="?page=blog&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>"><?=$val[2][$til]?></a>
                                <a class="nav-item nav-link menu-hover <?=(isset($_GET['page']) && $_GET['page']=='contact') ? 'active': '' ?>" href="?page=contact&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>"><?=$val[3][$til]?></a>
                                <?php   if (!isset($_SESSION['ism'])):?>
                                <a class="nav-item nav-link menu-hover <?=(isset($_GET['page']) && $_GET['page']=='login') ? 'active': '' ?>" href="?page=login&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>">Log in</a>
                                <?php else:?>
                                <a class="nav-item nav-link menu-hover <?=(isset($_GET['page']) && $_GET['page']=='login') ? 'active': '' ?>" href="?page=cabin&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>">My profil</a>
                                <?php endif;?>    
                            </div>
                            <div class="dropdown open">
                                <a href="#" class="nav-item nav-link menu-hover dropdown-toggle pl-0 pl-md-4" type="button" id="triggerId"
                                data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                    <?=(!isset($_GET['til']) || $til=='en') ? 'English' : 'O\'zbekcha' ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="?til=<?=(!isset($_GET['til']) || $_GET['til'] == 'en') ? 'uz' : 'en' ?>&page=<?=(isset($_GET['page'])) ? $_GET['page'] : 'main' ?>">
                                        <?=($til !== 'uz' ) ? 'Uzbek' : 'Inglischa' ?>
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-0  col-lg-4 p-0 px-md-3">
                        <div class="d-flex justify-content-end align-items-center sm-none">
                            <div class="fs-sm text-white mr-3 text-center">
                                <i class="bi bi-person-circle"></i><br>
                                <a href="http://localhost/backend/amaliy/darkpan/view/layout/singin.php" class="nav-link menu-hover">
                                     Admin panel
                                </a>
                            </div>
                            <div class="mr-3">
                                <img src="<?=$path['path']['url'].$img[6]['url']?>" width="37">
                            </div>
                            <div class="">
                                <div style="color: #A4D6CF;" class="menu-hover hover-a"><?=$val[4][$til]?></div>
                                <div class="text-white  hover-a">+00 89 458 648</div>   
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header end -->
