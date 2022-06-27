<?php
if (isset($_POST['btn'])) {
    $login=$_POST['login'];
    $parol=$_POST['parol'];
    $a=logup('users',$login,$parol);
    if($a['ism']){
        ?>
        <script>
            window.location = 'index.php';
        </script>
        <?php
    }
}

?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="index.php" method="post" class="border p-2 border-info my-4 rounded">
                    <legend class="color-bg">Form</legend>
                    <label for="name" class="color-bg">Email:</label>
                    <input type="email" id="name" required class="form-control" name="login">
                    <label for="pa" class="color-bg">Parol:</label>
                    <input type="password" id="pa" required class="form-control" name="parol">
                    <div>
                        <a href="?page=logup&til=<?=(isset($_GET['til']))? $_GET['til']: 'en'?>" class="nav-link color-bg">Sing up</a>
                    </div>
                    <div class="my-2 text-right">
                        <button name="btn" class="btn btn-outline-info">Send mi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>