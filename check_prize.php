

<form action="check_prize.php" method="post">
<input type="number" name="year" min="<?=date('Y')-1?>" step="1" max="<?=date('Y')+1?>"> 
<select name="period">
    <option value="1">一，二月</option>
    <option value="2">三，四月</option>
    <option value="3">五，六月</option>
    <option value="4">七，八月</option>
    <option value="5">九，十月</option>
    <option value="6">十，十一月</option>
</select>
</form>
<table>
<?php
$year=$_POST['year'];
$period=$_POST['period'];

/* 把發票資料先撈出來 */
$sql="select date, period, code, number from `invoice` where substr(date, 1)='$year' and `period`='$period'";
$numbs=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

foreach($numbs as $numb){
    echo "<tr>";
    echo "<td>" . $numb['date'] . "</td>";
    echo "<td>" . $numb['period'] . "</td>";
    echo "<td>" . $numb['code'] . "</td>";
    echo "<td>" . $numb['number'] . "</td>";

    echo "<td>" ."</td>";
    echo "</tr>";



}
?>


</table>
