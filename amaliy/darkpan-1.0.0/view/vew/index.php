<?php

require_once '../../../setting/db.php';
require_once '../../../setting/config.php';
include_once '../layout/header.php';

if(isset($_GET['page'])){
    include_once '../layout/'.$_GET['page'].'.php';
}else{
    include '../layout/main.php';
}

include_once '../layout/footer.php';


?>