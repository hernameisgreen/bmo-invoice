<?php
include_once "settings.php";


$username=$_POST['username'];
$pw=$_POST['pw'];

$sql="select * from `acc_basic` where `username`='$username' and `pw`='$pw'; ";

$run=$pdo->query($sql)->fetch();

if(!empty ($run)){
    header("location:../dashboard.php");
}else{
    header("location:../index.php");
}
