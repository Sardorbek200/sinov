<?php
if(isset($_POST['btn'])){
    $db= connent();
    $ism= $_POST['ism'];
    $login= $_POST['login'];
    $parol= $_POST['parol'];
    $img= $_FILES['img'];
    $m=$_SERVER['DOCUMENT_ROOT'].'/Backend/amaliy/users-img/';
	$s= explode('.', $f['name']);
	$im= end($s);
    $imgtype=['png','PNG','jpg','jpeg','gif','JPG','JPEG'];
    $im=in_array($im,$imgtype);
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
        $ism= $_POST['ism'];
    }
    $alfa=update('users',['name','login','parol','img','tel'],['{$ism}' ,'{$login}','{$parol}','{$img}','{$tel}'],$_SESSION['id']);
    if($alfa){
        $_SESSION['ism']=$ism;
        $_SESSION['login']=$login;
        $_SESSION['parol']=$parol;
        $_SESSION['img']=$img;
        $_SESSION['tel']=$tel;
        ?>

<script>
    window.location='index.php'
</script>    
<?php
    }else{
        false;
    }
}


?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="#" enctype="multipart/form-data" method="post" class=" my-4 border border-info p-3">
                    <legend>Update</legend>
                    <label for="ism">Ismingiz:</label>
                    <input type="text" name="ism" id="ism" value="<?=$_SESSION['ism']?>" class="form-control" required>
                    <label for="login">Emailingiz:</label>
                    <input type="email" name="login" value="<?=$_SESSION['login']?>" id="login" class="form-control" required>
                    <label for="parol">Parolingizni yarating:</label>
                    <input type="password" name="parol" value="<?=$_SESSION['parol']?>" id="parol" class="form-control" required>
                    <label for="img">Rasmingiz:</label>
                    <input type="file" name="img" id="img" value="<?=$_SESSION['img']?>" class="form-control" required>
                    <label for="tel">Telefon raqami:</label>
                    <input type="number" name="tel" id="tel" value="<?=$_SESSION['tel']?>" class="form-control" required>
                    <div class="mt-3 text-right">
                        <button name="btn" class="btn btn-outline-info">Yuborish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>