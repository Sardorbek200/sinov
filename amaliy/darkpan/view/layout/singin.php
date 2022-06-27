 <?php
require_once '../../../setting/db.php';
$getall=getAll('admin');
foreach($getall as $k ){
    $admin=$k;
}
if (isset($_POST['btn'])) {
    $login=$_POST['login'];
    $parol=$_POST['parol'];
    $m=newlogin($parol,$login);
    if(isset($m['name'])){
        $url='http://localhost/backend/amaliy/darkpan/view/vew/';
    }else{
        $url='#';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Favicon -->
      <link href="../../img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../../css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="<?=(isset($url)) ? $url : '#'?>" method="post">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                                </a>
                                <h3>Sign In</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input required name="login" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input required name="parol" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button name="btn" type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>    
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
</body>
</html>
 <!-- Sign In Start -->