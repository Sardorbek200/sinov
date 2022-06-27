<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h6 class="mb-4">Servis</h6>
                                <div class="form-floating mb-3">
                                    <input name="img" type="file" class="form-control" required multiple id="floatingInput"
                                        placeholder="IMAGE DOWNLOAD">
                                    <label for="floatingInput">IMAGE DOWNLOAD</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="title_en" type="text" class="form-control" id="floatingPassword"
                                        placeholder="Title">
                                    <label for="floatingPassword">Title_en</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="title_uz" type="text" class="form-control" id="floatingPassword"
                                        placeholder="Title">
                                    <label for="floatingPassword">Title_uz</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="com_en" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 150px;"></textarea>
                                    <label for="floatingTextarea">Comments_en</label>
                                </div> 
                                <div class="form-floating">
                                    <textarea name="com_uz" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 150px;"></textarea>
                                    <label for="floatingTextarea">Comments_uz</label>
                                </div> 
                                <div class="mt-3 text-end">
                                    <button name="btn" class="btn btn-outline-primary">Add servis</button>
                                </div>   
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">        
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h6 class="mb-4">Team members</h6>
                                <div class="form-floating mb-3">
                                    <input name="img2" type="file" class="form-control" required multiple id="floatingInp"
                                        placeholder="IMAGE DOWNLOAD">
                                    <label for="floatingInp">IMAGE DOWNLOAD</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="lever_en" type="text" class="form-control" id="floatingPasswo"
                                        placeholder="Title">
                                    <label for="floatingPasswo">Lever_en</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="lever_uz" type="text" class="form-control" id="floatingPasswor"
                                        placeholder="Title">
                                    <label for="floatingPasswor">Lever_uz</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="tle_en" type="text" class="form-control" id="floatingPass"
                                        placeholder="Title">
                                    <label for="floatingPass">Title_en</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="tle_uz" type="text" class="form-control" id="floatingPas"
                                        placeholder="Title">
                                    <label for="floatingPas">Title_uz</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="m_en" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextare" style="height: 150px;"></textarea>
                                    <label for="floatingTextare">Comments_en</label>
                                </div> 
                                <div class="form-floating">
                                    <textarea name="m_uz" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextar" style="height: 150px;"></textarea>
                                    <label for="floatingTextar">Comments_uz</label>
                                </div> 
                                <div class="mt-3 text-end">
                                    <button name="btn2" class="btn btn-outline-primary">Add member</button>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">        
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h6 class="mb-4">Team members</h6>
                                <div class="form-floating mb-3">
                                    <input name="img3" type="file" class="form-control" required multiple id="floatingInp"
                                        placeholder="IMAGE DOWNLOAD">
                                    <label for="floatingInp">IMAGE DOWNLOAD</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="by_en" type="text" class="form-control" id="floatingPasswo"
                                        placeholder="Title">
                                    <label for="floatingPasswo">By_en</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="by_uz" type="text" class="form-control" id="floatingPasswor"
                                        placeholder="Title">
                                    <label for="floatingPasswor">By_uz</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="title_en2" type="text" class="form-control" id="floatingPass"
                                        placeholder="Title">
                                    <label for="floatingPass">Title_en</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input required name="title_uz2" type="text" class="form-control" id="floatingPas"
                                        placeholder="Title">
                                    <label for="floatingPas">Title_uz</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="m_en2" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextare" style="height: 150px;"></textarea>
                                    <label for="floatingTextare">Comments_en</label>
                                </div> 
                                <div class="form-floating">
                                    <textarea name="m_uz2" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextar" style="height: 150px;"></textarea>
                                    <label for="floatingTextar">Comments_uz</label>
                                </div> 
                                <div class="mt-3 text-end">
                                    <button name="btn3" class="btn btn-outline-primary">Add news</button>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
<?php
if (isset($_POST['btn'])) {
    $img=$_FILES['img']['name'];
    $f=$_FILES['img'];
    // echo $img;
    $m=$_SERVER['DOCUMENT_ROOT'].'/backend/amaliy/img/';
	$s= explode('.', $f['name']);
	$im= end($s);
    $img= 'rasm'.time().'.'.$im;
	move_uploaded_file($f['tmp_name'], $m.$img);
    $title_en=$_POST['title_en'];
    $comment_en=$_POST['com_en'];
    $title_uz=addslashes($_POST['title_uz']);
    $comment_uz=addslashes($_POST['com_uz']);
    $db=connent();
    $query="INSERT INTO `servis`( `img`, `title_en`,`title_uz`, `comment_en`,`comment_uz`) VALUES ('img/$img', '{$title_en}','{$title_uz}', '{$comment_en}','{$comment_uz}')";
    $res=$db->query($query);
    if($res ){
        $img='';
        $title_en='';
        $title_uz='';
        $comment_en='';
        $comment_uz='';
        $query='';
        print_r($query);
    }
   
    else{
        ?>
        <script>
            alert('Servis don\'t add!!!')
        </script>
        <?php
    }

}
if(isset($_POST['btn2'])){
    $img=$_FILES['img2']['name'];
    $f=$_FILES['img2'];
    $m=$_SERVER['DOCUMENT_ROOT'].'/backend/amaliy/img/';
	// $s=explode('.', $f['name']);
	// $im= end($s);
    // $img= 'rasm'.time().'.'.$im;
	move_uploaded_file($f['tmp_name'], $m.$img);
    $title_en=$_POST['tle_en'];
    $lever_en=$_POST['lever_en'];
    $lever_uz=addslashes($_POST['lever_uz']);
    $comment_en=$_POST['m_en'];
    $title_uz=addslashes($_POST['tle_uz']);
    $comment_uz=addslashes($_POST['m_uz']);
    $db=connent();
    $query="INSERT INTO `team`(`img`, `lever_en`, `title_en`, `comment_en`, `lever_uz`, `title_uz`, `comment_uz`) VALUES ('img/$img','{$lever_en}','{$title_en}','{$comment_en}','{$lever_uz}','{$title_uz}','{$comment_uz}')";
    if ($db->query($query)) {
        $img='';
        $title_en='';
        $title_uz='';
        $comment_en='';
        $comment_uz='';
        $query='';
    }
    else{
        ?>
        <script>
            alert('Team member don\'t add!!!')
        </script>
        <?php
    }
} 
if(isset($_POST['btn3'])){
    $img=$_FILES['img3']['name'];
    $f=$_FILES['img3'];
    $m=$_SERVER['DOCUMENT_ROOT'].'/backend/amaliy/img/';
	// $s=explode('.', $f['name']);
	// $im= end($s);
    // $img= 'rasm'.time().'.'.$im;
	move_uploaded_file($f['tmp_name'], $m.$img);
    $title_en=addslashes($_POST['title_en2']);
    $title_uz=addslashes($_POST['title_uz2']);
    $by_en=addslashes($_POST['by_en']);
    $by_uz=addslashes($_POST['by_uz']);
    $comment_en=addslashes($_POST['m_en2']);
    $comment_uz=addslashes($_POST['m_uz2']);
    $db=connent();
    $query="INSERT INTO `news`(`img`, `by_en`, `by_uz`, `title_en`, `title_uz`, `comment_en`, `comment_uz`) VALUES ('img/$img','{$by_en}','{$by_uz}','{$title_en}','{$title_uz}','{$comment_en}','{$comment_uz}')";
    if ($db->query($query)) {
        $img='';
        $title_en='';
        $title_uz='';
        $comment_en='';
        $comment_uz='';
        $query='';
    }
    else{
        ?>
        <script>
            alert('Team member don\'t add!!!')
        </script>
        <?php
    }
} 
?>