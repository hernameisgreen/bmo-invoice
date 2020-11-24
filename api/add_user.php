<?php
include_once"settings.php";

$name=$_POST['name'];
$birthday=$_POST['birthday'];
$username=$_POST['username'];
$pw=$_POST['pw'];
$email=$_POST['email'];
$location=$_POST['location'];

$sql="insert into `acc_basic` (`username`, `pw`, `email`) values ('$username', '$pw', '$email');";
$pdo->exec($sql);

$user="select * from `acc_basic` where `username`='$username' &&`pw`='$pw'";
$user=$pdo->query($user)->fetch();
$acc_id=$user['id'];

$sql="insert into `acc_info` (`name`, `birthday`, `location`, `acc_id`) values ('$name', '$birthday', '$location', '$acc_id');";

$result=$pdo->exec($sql);

if($result){
    header("location:../index.php?msg=registration_success");
}else{
    header("location:../index.php?msg=registration_failure");
}