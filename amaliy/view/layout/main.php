<main>
            <div class="mb-5 bg">
                <div class="row  px-3 mr-0">
                    <div  style="margin-top:50px !important ;" class="row">
                        <div class="col-10 offset-1 mt-2 mt-md-3 mt-lg-5 p-0 pl-2 pl-sm-4 col-sm-6 offset-sm-0">
                            <div class="px-lg-5 d-flex align-items-center mt-2">
                                <span style="width: 30px; height: .7px; background: #A4D6CF; display: flex;"></span>
                                <span class="color ml-lg-2 fs-sm"><?=$val[5][$til]?></span>
                            </div>
                            <div class="row">
                                <h1 class="col-12 col-sm-9 offset-1 text-white fs">
                                <?=$val[6][$til]?>
                                </h1>
                            </div>
                            <div class="px-lg-5 d-flex align-items-center mb-3">
                                <span style="width: 25px; height: .7px; background: #A4D6CF; display: block;"></span>
                                <span class="color ml-lg-2 fs-sm"><?=$val[7][$til]?></span>
                            </div>
                            <div class="mt-lg-5 mb-3">
                                <button class=" fs-xsm mb-4 ml-lg-5 px-lg-5 btn btn-outline-info bg-white color-bg border-0 p-2 rounded-0"><?=$val[8][$til]?> +</button>
                            </div>
                        </div>
                        <div class="col-10 offset-2 col-sm-6 offset-sm-0">
                            <div class="row">   
                                <div class="col-12 col-sm-10 p-0 p-lg-2 pr-2">
                                    <div class="position-relative hg">
                                        <img src="<?=$path['path']['url']?><?=$img[0]['url']?>" class="img-fluid position-absolute t">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-3 ml-lg-5 px-3 py-2 mr" style="margin-right: 0px !important;">
                <div>
                    <div class="d-flex align-items-center mt-lg-5 col-12">
                        <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                        <span class="fs-sm text-secondary ml-2">
                            <?=$val[9][$til]?>
                        </span>
                    </div>
                    <div class="col-12 pr-lg-5 my-lg-3">
                        <sardor class="bigsize color-bg fs-lg">
                        <?=$val[10][$til]?>
                        </sardor>
                    </div>
                    <div class="row mr-0">
                        <div class="col-10 p-0 offset-1 col-md-8 offset-1 col-lg-6 offset-lg-0">
                            <div class="w-100 ml-lg-4">
                                <div class="w-100">
                                    <img src="<?=$path['path']['url'].$img[1]['url']?>" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-0">
                            <div class="p-lg-5 py-3">
                                <div>
                                    <h2 class="color-bg fs-sm">
                                    <?=$val[11][$til]?>
                                    </h2>
                                    <div>
                                        <span class="w-100 fs-sm ">
                                        <?=$val[12][$til]?>
                                        </span>
                                        <h5 class="color-bg my-3 fs-sml">
                                        <?=$val[13][$til]?>
                                        </h5>
                                        <h3 class="color-bg my-4 fs-sm">
                                        <?=$val[19][$til]?>
                                        </h3>
                                        <span class="fs-sm">
                                        <?=$val[12][$til]?>
                                        </span><br><br>
                                        <span class="fs-sm">
                                        <?=$val[14][$til]?>
                                        </span>
                                        <div class="mt-3 mb-lg-5">
                                            <button class=" mb-4 fs-sm px-lg-5  btn-mt px-md-4 px-3 btn btn-outline-info bg-white color-bg border p-2 rounded-0"><?=$val[20][$til]?> +</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-lg-5 " style="background-color: #E1F4F2;">
                <div class="ml-lg-4">
                    <div class="d-flex align-items-center mt-lg-5 px-3 pt-3">
                        <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                        <span class="text-secondary ml-2 fs-xsm">
                        <?=$val[8][$til]?>
                        </span>
                    </div>
                    <div>
                        <h1 class="color-bg fs-sm pl-3">
                        <?=$val[21][$til]?>
                        </h1>
                    </div>
                    <div class="row mt-lg-5 mx-sm-3 mx-md-0 justify-content-around">
                        <?php $serviss=getAll('servis');foreach($serviss as $servis) :?>
                        <div class="col-10 col-sm-6 offset-0 col-md-6 offset-sm-0 col-lg-4 col-xl-3 mb-2">
                                <img src="<?=$path['path']['url'].$servis['img']?>" class="img-fluid mb-1 mb-md-2 mb-lg-3 w-100">
                            <div class="d-flex align-items-center fs-xsm my-1 my-md-2 my-lg-3">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="text-secondary ml-2">
                                    <?=$servis['title_'.$til]?>
                                </span>
                            </div>
                            <h4>
                                <a href="#" class="color-bg text-decoration-none fs-sm">
                                    <?=$servis['comment_'.$til]?>
                                </a>
                            </h4>
                        </div>
                        <?php endforeach;?>
                        <!-- <div class="col-10 col-sm-6 offset-0 col-md-6 offset-sm-0 col-lg-4 col-xl-3 mb-2">
                                <img src="<?=$path['path']['url'].$img[3]['url']?>" class="img-fluid mb-1 mb-md-2 mb-lg-3 w-100">
                            <div class="d-flex align-items-center fs-xsm my-1 my-md-2 my-lg-3">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="text-secondary ml-2">
                                    <?=$val[23][$til]?>
                                </span>
                            </div>
                            <h4>
                                <a href="#" class="color-bg text-decoration-none fs-sm">
                                    <?=$val[27][$til]?>        
                                </a>
                            </h4>
                        </div>
                        <div class="col-10 col-sm-6 offset-0 col-md-6 offset-sm-0 col-lg-4 col-xl-3 mb-2">
                            <div class="w-100">
                                <img src="<?=$path['path']['url'].$img[4]['url']?>" class="img-fluid mb-1 mb-md-2 mb-lg-3 w-100">
                            </div>
                            <div class="d-flex align-items-center fs-xsm my-1 my-md-2 my-lg-3">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="text-secondary ml-2">
                                    <?=$val[24][$til]?>
                                </span>
                            </div>
                            <h4>
                                <a href="#" class="color-bg text-decoration-none fs-sm">
                                <?=$val[28][$til]?>
                                </a>
                            </h4>
                        </div>
                        <div class="col-10 col-sm-6 offset-0 col-md-6 offset-sm-0 col-lg-4 col-xl-3 mb-2">
                            <div class="w-100">
                                <img src="<?=$path['path']['url'].$img[5]['url']?>" class="mb-1 mb-md-2 mb-lg-3 img-fluid w-100">
                            </div>
                            <div class="d-flex align-items-center fs-xsm my-1 my-md-2 my-lg-3">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="text-secondary ml-2">
                                    <?=$val[25][$til]?>
                                </span>
                            </div>
                            <h4>
                                <a href="#" class="color-bg text-decoration-none fs-sm">
                                <?=$val[29][$til]?>
                                </a>
                            </h4>
                        </div> -->
                    </div>
                    <div class="mt-3 mb-1 mb-md-3 mb-lg-5 text-center">
                        <button class=" mb-4 px-lg-5 fs-sm btn  btn-mt btn-outline-info bg-white color-bg border p-2 rounded-0">    <?=$val[30][$til]?> +</button>
                    </div>
                </div>
            </div>
            
            <div class="bg">
                <div class="row align-items-center">
                    <div class="col-12  col-md-10 offset-md-1  col-lg-6 offset-lg-0">
                        <div class="p-lg-5 ml-3">
                            <div class="d-flex fs-xsm align-items-center my-3">
                                <span style="width: 30px; height: .7px; display: block; background-color: #A4D6CF;" class=""></span>
                                <span class="ml-2 color">
                                <?=$val[31][$til]?>
                                </span>
                            </div>
                            <div>
                                <h2 class="text-white fs-sm">
                                <?=$val[32][$til]?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-10 offset-md-1  col-lg-6 offset-lg-0">
                        <div class="mr-lg-5 ml-3 ml-md-0 mb-2 ">
                            <div>
                                <div class="d-flex justify-content-center align-items-center py-4 w-75" style="background-color: #23786D !important;">
                                    <div class="mr-4">
                                        <img src="<?=$path['path']['url'].$img[6]['url']?>" width="37">
                                    </div>
                                    <div class="">
                                        <div style="color: #A4D6CF;" class="menu-hover hover-a"><?=$val[4][$til]?>:</div>
                                        <div class="text-white  hover-a">+00 89 458 648</div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="row position-relative mb-3">
                        <div class="position-absolute" style="background-color: rgba(225, 244, 242, 0.8); top:0px; height: 630px;width: 30.67%;left: 15px;">
    
                        </div>
                        <div class="col-8 p-lg-5 offset-4">
                            <div>
                                <div class="d-flex fs-xsm align-items-center ml-lg-5">
                                    <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                    <span class="ml-lg-2 text-secondary">
                                    <?=$val[39][$til]?>
                                    </span>
                                </div>
                                <div class="ml-lg-5 color-bg font-weight-normal fs ff">
                                    <?=$val[57][$til]?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-lg-5 mb-lg-5">
                        <?php $teams=getAll('team');foreach($teams as $team):?>
                        <div class="col-10 offset-1 col-md-6 offset-md-0 col-lg-4 mb-3">
                            <div class=" px-lg-4 px-md-3">
                                <div>
                                    <img src="<?=$path['path']['url'].$team['img']?>" class="img-fluid">
                                </div>
                                <div>
                                    <div class="d-flex align-items-center fs-xsm mt-lg-4 mb-lg-3 mt-3 mb-2">
                                        <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                        <span class="ml-2 text-secondary"><?=$team['lever_'.$til]?></span>
                                    </div>
                                    <div class="h5 mb-lg-3 color-bg fs-sm">
                                        <?=$team['title_'.$til]?>
                                    </div>
                                    <div class="fs-xsm">
                                       <?=$team['comment_'.$til]?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                </div>
            </div>
            <div class="bg mb-5">
                <div class="row">
                    <div class="col-10 offset-1 col-md-6 offset-md-0 mb-3">
                        <div class="p-lg-5 ml-lg-5">
                            <div class="d-flex align-items-center fs-xsm my-lg-3">
                                <span style="width: 30px; height: .7px; display: block; background-color: #A4D6CF;" class=""></span>
                                <span class="ml-2 color"><?=$val[58][$til]?></span>
                            </div>
                            <div>
                                <h2 class="text-white fs-lg">
                                <?=$val[33][$til]?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1 col-md-6 offset-md-0">
                        <div class="mr-lg-5">
                            <img src="<?=$path['path']['url'].$img[10]['url']?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-3 text-center">
                <div id="project" class="row justify-content-around mx-lg-5 py-lg-3 mb-lg-5 " style="background-color:rgba(225, 244, 242, 0.8);margin-right: 0px !important;">
                    <div class="col-10 offset-1 col-md-6 offset-md-0 col-lg-3 p-3 my-2">
                        <div class="text-center fs">
                            <h2 class="color-bg">
                                <span id="prch">

                                </span>
                                 +
                            </h2>
                            <div class="fs-sml d-flex align-items-center my-2 justify-content-center">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="ml-2 text-secondary">
                                    <?=$val[38][$til]?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1 col-md-6 offset-md-0 col-lg-3 p-3 my-2">
                        <div class="text-center fs-sm">
                            <h2 class="color-bg">
                                <span id="happy">

                                </span> +
                            </h2>
                            <div class="fs-sml d-flex align-items-center my-2 justify-content-center">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="ml-2 text-secondary">
                                <?=$val[36][$til]?> 
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1 col-md-6 offset-md-0 col-lg-3 p-3 my-2">
                        <div class="text-center fs-sm">
                            <h2 class="color-bg">
                                <span id="team">

                                </span> +
                            </h2>
                            <div class="fs-sml d-flex align-items-center my-2 justify-content-center">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="ml-2 text-secondary">
                                    <?=$val[39][$til]?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1 col-md-6 offset-md-0 col-lg-3 p-3 my-2">
                        <div class="text-center fs-sm">
                            <h2 class="color-bg">
                                <span id="award">

                                </span> +
                            </h2>
                            <div class="fs-sml d-flex align-items-center my-2 justify-content-center">
                                <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                <span class="ml-2 text-secondary">
                                <?=$val[40][$til]?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row mx-lg-5 p-lg-5 p-4 position-relative" style="overflow: hidden;">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <!-- <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                        </ul> -->
                      
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?=$path['path']['url'].$img[11]['url']?>" class="img-fluid position-relative">
                            <div class="position-absolute bg p-lg-5 p-2 text-white" style="bottom: 0px;">
                                <span class="fs-sm"><?=$val[64][$til]?>:</span>
                                <h5 class="fs-sm">Farm Design</h5>
                                <span class="fs-sm"><?=$val[65][$til]?>:</span>
                                <h5 class="fs-sm">Alex Milan</h5>
                                <span class="fs-sm"><?=$val[66][$til]?>:</span>
                                <h5 class="fs-sm">Mississippi, USA</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="<?=$path['path']['url'].$img[12]['url']?>" height="440.7px !important" class="position-relative img-fluid w-100" alt="Chicago">
                            <div class="position-absolute bg p-lg-5 text-white p-2" style="bottom: 0px;">
                                <span class="fs-sm"><?=$val[64][$til]?>:</span>
                                <h5 class="fs-sm">Farm Design</h5>
                                <span class="fs-sm"><?=$val[65][$til]?>:</span>
                                <h5 class="fs-sm">Aleksandr</h5>
                                <span class="fs-sm"><?=$val[66][$til]?>:</span>
                                <h5 class="fs-sm">Dexayn, Norvegiya</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="<?=$path['path']['url'].$img[13]['url']?>" class="position-relative img-fluid w-100" alt="New York">
                            <div class="position-absolute bg p-lg-5 p-2 text-white" style="bottom: 0px;">
                                <span class="fs-sm"><?=$val[64][$til]?>:</span>
                                <h5 class="fs-sm">Farm Design</h5>
                                <span class="fs-sm"><?=$val[65][$til]?>:</span>
                                <h5 class="fs-sm">Alex Milan</h5>
                                <span class="fs-sm"><?=$val[66][$til]?>:</span>
                                <h5 class="fs-sm">Uxan, China</h5>
                            </div>
                          </div>
                        </div>
                      
                        <!-- Left and right controls -->
                        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a> -->
                      
                      </div>
                    <!-- <div class="position-absolute" style="left: 0px;" id="carusel">
                        <div >
                            
                        </div>
                        
                    </div> -->
                     <div class="my-lg-4 mt-3">
                        <a id="prev" href="#demo"  data-slide="prev" class="btn btn-mt btn-outline-info bg-white color-bg p-lg-3 p-2 rounded-0 mr-lg-5 mr-3">
                            <img src="<?=$path['path']['url'].$img[14]['url']?>" alt="">
                        </a>
                        <a id="next" href="#demo" data-slide="next" class="btn btn-mt btn-outline-info bg-white color-bg p-lg-3 p-2 rounded-0">
                            <img src="<?=$path['path']['url'].$img[15]['url']?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div style="background: #E1F4F2;">
                <div class="mx-lg-5 mx-3 mx-md-4 p-lg-5 p-3 p-md-4">
                    <div class="d-flex align-items-center my-2 fs-xsm">
                        <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                        <span class="ml-2 text-secondary">
                        <?=$val[36][$til]?>
                        </span>
                    </div>
                    <div class="h2 color-bg fs-lg">
                    <?=$val[34][$til]?>
                    </div>
                    <div class="owl-carousel justify-content-around">
                        <!-- <div class="loop"> -->
                            <div class=" p-lg-3 pt-lg-4 p-2 pt-3 bg-white w-100">
                                <span class="color-bg h6 fs-sm">
                                <?=$val[16][$til]?>
                                </span>
                                <div class="d-flex align-items-center fs-xsm mt-4 mb-3">
                                   <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                    <span class="ml-2 text-secondary">
                                    <?=$val[41][$til]?>
                                    </span>
                                </div>
                                <div class="h4 color-bg fs-sm">
                                    Rachel Patterson
                                </div>
                            </div>
                            <div class=" p-lg-3 pt-lg-4 p-2 pt-3 bg-white w-100">
                                <span class="color-bg h6 fs-sm">
                                <?=$val[16][$til]?>
                                </span>
                                <div class=" fs-xsm d-flex align-items-center mt-4 mb-3">
                                    <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                    <span class="ml-2 text-secondary">
                                    <?=$val[42][$til]?>
                                    </span>
                                </div>
                                <div class="h4 color-bg fs-sm">
                                    Jhon Doe
                                </div>
                            </div>
                            <!-- <div class=" p-3 pt-4 bg-white" style="width: 310px;">
                                <span class="color-bg h6">
                                    “Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem has been the industry's standard dummy text since the 1500 when an unknown printer took galley type and scram bled it make a type specimen book
                                </span>
                                <div class="d-flex align-items-center mt-4 mb-3">
                                    <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                    <span class="ml-2 text-secondary">Designer of Musion</span>
                                </div>
                                <div class="h4 color-bg ">
                                    Uvolt Jaffer
                                </div>
                            </div>
                            <div class="p-3 pt-4 bg-white" style="width: 310px;">
                                <span class="color-bg h6">
                                    “Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem has been the industry's standard dummy text since the 1500 when an unknown printer took galley type and scram bled it make a type specimen book
                                </span>
                                <div class="d-flex align-items-center mt-4 mb-3">
                                    <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                                    <span class="ml-2 text-secondary">CEO of Musion</span>
                                </div>
                                <div class="h4 color-bg ">
                                    Leo Doe
                                </div>
                            </div> -->

                        </div>
                        
                    <!-- </div> -->
                </div>
            </div>
            <div >
                <div class="mx-lg-5 mx-3 mx-md-4 p-lg-5 p-3 p-md-4">
                    <div class="fs-xsm d-flex align-items-center my-2">
                        <span style="width: 30px; height: .7px; display: block;" class="bg-secondary"></span>
                        <span class="ml-2 text-secondary"><?=$val[37][$til]?></span>
                    </div>
                    <div class="h2 color-bg fs-lg" style="letter-spacing: 3px;">
                    <?=$val[35][$til]?>
                    </div>
                    <div class="row my-lg-5 my-3 my-md-4 align-items-default">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 px-3 mb-3 mb-lg-0">
                            <div style="background: #E1F4F2">
                                <div>
                                    <img src="<?=$path['path']['url'].$img[16]['url']?>" class="img-fluid">
                                </div>
                                <div class="p-3 px-lg-4">
                                    <div class="mt-lg-3 mt-2 fs-xsm">
                                        <span class="mr-3 text-secondary font-weight-normal" style="font-weight: 600 !important; ">
                                            <span class="color-bg"><?=$val[45][$til]?>: </span> <?=$val[47][$til]?> 23, 2022
                                        </span>
                                        <span class="text-secondary font-weight-normal" style="font-weight: 600 !important; ">
                                            <span class="color-bg"><?=$val[46][$til]?>:</span> Kristofer Pennell
                                        </span>
                                    </div>
                                    <div class="h4 fs-sm color-bg my-lg-4 my-3">
                                    <?=$val[43][$til]?>
                                    </div>
                                    <div class="text-secondary mb-4 fs-xsm">
                                    <?=$val[14][$til]?>
                                    </div>
                                    <div>
                                        <div class="mt-lg-4 mb-lg-3">
                                            <button class=" px-lg-5 fs-xsm btn 
                                            btn-outline-info bg-white color-bg p-2 rounded-0" 
                                            style="border: 0px;"><?=$val[30][$til]?> +</button>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 px-3" >
                            <div style="background: #E1F4F2">
                                <div>
                                    <img src="<?=$path['path']['url'].$img[17]['url']?>" class="img-fluid">
                                </div>
                                <div class="p-3 px-lg-4">
                                    <div class="mt-lg-3 mt-2 fs-xsm">
                                        <span class="mr-3 text-secondary font-weight-normal" style="font-weight: 600 !important; ">
                                            <span class="color-bg"><?=$val[45][$til]?>: </span> <?=$val[47][$til]?> 23, 2022
                                        </span>
                                        <span class="text-secondary font-weight-normal" style="font-weight: 600 !important;">
                                            <span class="color-bg"><?=$val[46][$til]?>:</span> Kristofer Pennell
                                        </span>
                                    </div>
                                    <div class="h4 color-bg my-lg-4 my-3 fs-sm">
                                    <?=$val[44][$til]?>
                                    </div>
                                    <div class="text-secondary mb-4 fs-xsm">
                                    <?=$val[17][$til]?>
                                    </div>
                                    <div>
                                        <div class="mt-lg-4 mb-3">
                                            <button class=" px-lg-5 fs-xsm btn btn-outline-info bg-white color-bg p-2 rounded-0" style="border: 0px;"><?=$val[30][$til]?> +</button>
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>    
                <div class="mx-3">
                    <div class="row p-lg-5 mr-0  p-md-4 p-3" style="background: #E1F4F2">
                        <div class="col-10 offset-1">
                            <div class="row justify-content-around py-lg-5">
                                <div class="col-4 col-md-3 col-lg-2  p-2">
                                    <div>
                                        <img src="<?=$path['path']['url'].$img[18]['url']?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2 p-2">
                                    <div>
                                        <img src="<?=$path['path']['url'].$img[19]['url']?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2 p-2 ">
                                    <div>
                                        <img src="<?=$path['path']['url'].$img[20]['url']?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2 p-2">
                                    <div>
                                        <img src="<?=$path['path']['url'].$img[21]['url']?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2 p-2">
                                    <div>
                                        <img src="<?=$path['path']['url'].$img[22]['url']?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> 