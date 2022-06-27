<?php
session_start();
function connent(){
    $db= new mysqli('localhost', 'root', '', 'amaliyot');
    if ($db->connect_error > 0) {
        echo 'xato';
    }
    else{
        $db->set_charset('utf8');
    }
    return $db;
}
function getAll($table){
    $db=connent();

    $res=$db->query('SELECT * FROM '. $table);
    $arr=[];
    if($res->num_rows > 0){
        while($a=$res->fetch_assoc()){
            $arr[]=$a;
        }
    }
    else{
        echo 'Xatolik';
    }
    return $res;
}
function delete($id,$tablename)
{
    $db=connent();

    if($db->query("DELETE FROM $tablename WHERE id=$id")){
        return true;
    }
    else{
        return false;
    }

}
function update($tablename, $arr1, $arr2, $id)
{
    $db=connent();
    $query= "UPDATE $tablename SET ";
    if(is_array($arr1) && is_array($arr2))
    {
        if (count($arr1) == count($arr2)) {
            for ($i=0; $i < count($arr1); $i++) { 
                $query .= $arr1[$i]. "='{$arr2[$i]}', ";
            }
            $query= trim($query, ', ');
        }
    }
    else{
        $query .= "$arr1 = '{$arr2}'";
    }
    $query .= " WHERE id=". $id;
    if ($db->query($query)) {
        return true;
    }
    else {
        return false;
    }
    // return $query;
}
function get_id($table, $id)
{
    $db=connent();
    $r= $db->query("select * from {$table} where id=". $id);
    $m=$r->fetch_assoc();
    return $m;
}
function search($table,$name)
{
    $db=connent();
    $search =$db->query("SELECT * FROM $table WHERE CONCAT(modeel,names,rang) LIKE '%$name%'");
    $array = [];
    if($search->num_rows > 0){
        while($n=$search->fetch_assoc()){
            $array[]=$n;
        }
        return $array;
    }
    else{
        $arr= [['modeel'=>'Topilmadi!!!','names'=>'Topilmadi!!!','rang'=>'Topilmadi!!!','yili'=>'Topilmadi!!!','narx'=>'Topilmadi!!!']];
        return $arr;
    }
    
}
function limit($limit)
{
    $db=connent();
    $search =$db->query("SELECT * FROM mashinalar LIMIT $limit, 5");
    $array = [];
    if($search->num_rows > 0){
        while($n=$search->fetch_assoc()){
            $array[]=$n;
        }
        return $array;
    }
    else{
        $arr= [['modeel'=>'Topilmadi!!!','names'=>'Topilmadi!!!','rang'=>'Topilmadi!!!','yili'=>'Topilmadi!!!','narx'=>'Topilmadi!!!']];
        return $arr;
    }
}
function login($name, $parol, $login)
{
    $db=connent();
    $query="SELECT *FROM new_table WHERE names='{$name}' AND parol='{$parol}' AND login='{$login}'";
    $res= $db->query($query);
    if($res->num_rows > 0){
        $m= $res->fetch_assoc();
        $_SESSION['ism']= $m['names'];
        $_SESSION['parol']=$m['parol'];
        $_SESSION['login']=$m['login'];
        $_SESSION['id']=$m['id'];
        return $m;
    }
    return false;
}
function newlogin($parol, $login)
{
    $db=connent();
    $query="SELECT *FROM admin WHERE login='{$login}' AND parol='{$parol}' ";
    $res= $db->query($query);
    if($res->num_rows > 0){
        $m= $res->fetch_assoc();
        $_SESSION['ism']= $m['name'];
        $_SESSION['parol']=$m['parol'];
        $_SESSION['login']=$m['login'];
        $_SESSION['img']=$m['img'];
        $_SESSION['tel']=$m['tel'];
        $_SESSION['id']=$m['id'];
        return $m;
    }
    return false;
}
function logup( $table,$login, $parol)
{
    $db=connent();
    $query="SELECT *FROM $table WHERE login='{$login}' AND parol='{$parol}' ";
    $res= $db->query($query);
    if($res->num_rows > 0){
        $m= $res->fetch_assoc();
        $_SESSION['ism']= $m['name'];
        $_SESSION['parol']=$m['parol'];
        $_SESSION['login']=$m['login'];
        $_SESSION['img']=$m['img'];
        $_SESSION['tel']=$m['tel'];
        $_SESSION['id']=$m['id'];
        return $_SESSION;
    }
    return false;
}
function get_deck($table){
    $db=connent();

    $m= $db->query("select * from {$table} order by username desc");

    $ar=[];
    if ($m->num_rows >0) {
        while ($a = $m->fetch_assoc()) {
            $ar[]=$a;
        }
        return $ar;
    }
}
?>