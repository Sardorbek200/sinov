<?php
$adminup=getAll('admin');
foreach($adminup as $k=>$v){
    $a=$v;
}
if(isset($_POST['btn'])){
    $db= connent();
    $ism= $_POST['name'];
    $login= $_POST['login'];
    $parol= $_POST['parol'];
    $img= $_FILES['img'];
    $f=$_FILES;
    $f=$f['img'];
    $m=$_SERVER['DOCUMENT_ROOT'].'/backend/amaliy/darkpan/img/';
	$s= explode('.', $f['name']);
	$im= end($s);
    $imgtype=['png','PNG','jpg','jpeg','gif','JPG','JPEG'];
    // $im=in_array($im,$imgtype);
	$img= 'rasm'.time().'.'.$im;
	move_uploaded_file($f['tmp_name'], $m.$img);
    $tel= $_POST['tel'];
    $ism1=explode('\'', $ism);
    if(count($ism1) > 1 ){
        $ism='';
        for ($i=0; $i < count($ism1); $i++) { 
           $ism.=$ism1[$i]. '\'\'';
        }
        $ism=trim($ism, '\'');
    }
    else{
        $ism= $_POST['name'];
    }
    $alfa=update('admin',['name','login','parol','img','tel'],[$ism ,$login,$parol,'/darkpan/img/'.$img,$tel],1);
    if($alfa){
        $_SESSION['ism']=$ism;
        $_SESSION['login']=$login;
        $_SESSION['parol']=$parol;
        $_SESSION['img']='/darkpan/img/'.$img;
        $_SESSION['tel']=$tel;
        ?>

<script>
    // window.location='index.php'
</script>    
<?php
    }else{
        false;
    }
}
?>
<!-- Sign Up Start -->
 <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <form method="post" enctype="multipart/form-data">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                                </a>
                                <h3>Update</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="text" name="name" value="<?=(isset($_SESSION['ism'])) ? $_SESSION['ism'] : '' ?>" class="form-control" id="floatingText" placeholder="jhondoe">
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="email" name="login" value="<?=(isset($_SESSION['login'])) ? $_SESSION['login'] : '' ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input required type="text" name="parol" value="<?=(isset($_SESSION['parol'])) ? $_SESSION['parol'] : '' ?>" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input required type="file" name="img" multiple class="form-control" id="floatingImg" placeholder="Img">
                                <label for="floatingImg">Image</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input required type="number" minlength="9" name="tel" value="<?=(isset($_SESSION['tel'])) ? $_SESSION['tel'] : '' ?>" class="form-control" id="floatingtel" placeholder="Tel: number">
                                <label for="floatingtel">Telphone number</label>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                            <p class="text-center mb-0">Already have an Account? <a href="http://localhost/backend/amaliy/darkpan/view/layout/singin.php">Sign In</a></p>    
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
<?php
if (isset($_POST['btn'])) {
    $name=$_POST['name'];
    $login=$_POST['login'];
    $parol=$_POST['parol'];
    $update=update('admin',['name','login','parol'],[$name,$login,$parol], $a['id']);
    if($update){
        $a['name']=$name;
        $a['login']=$login;
        $a['parol']=$parol;
    }else{
        echo 'alik';
    }
}


?>