<?php
include_once "settings.php";

$_SESSION['user_id']=[];
$username=$_POST['username'];
$pw=$_POST['pw'];

$sql="select * from `acc_basic` where `username`='$username' and `pw`='$pw'; ";

$run=$pdo->query($sql)->fetch();



if(!empty ($run)){
    $sql="select `id` from `acc_basic`";
    $user_id=$pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
    $user_id=$user_id['id'];
    $_SESSION['user_id'] = "$user_id";
    header("location:../dashboard.php");
}else{
    header("location:../index.php");
}
