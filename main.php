<?php
include_once"api/settings.php";
$id= $_SESSION['user_id'];
$sql="select `first_name` from `acc_info` where `id`='$id'";

$frst_nm=$pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
echo "Hello, ";
print_r(($frst_nm)['first_name']);


