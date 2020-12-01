<?php
include_once"settings.php";

echo "<pre>";
print_r(array_keys($_POST));
echo"</pre>";

$year=$_POST['year'];
$period=$_POST['period'];

/* 新增特別獎 */
$sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '{$_POST['specialPrize']}','1' ";
$pdo->exec($sql);

/* 新增特獎 */
$sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '{$_POST['grandPrize']}','1' ";
$pdo->exec($sql);

