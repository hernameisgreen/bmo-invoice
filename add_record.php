<?php
include_once "api/settings.php";

function errmsg($item)
{
    if (!empty($_SESSION['err'][$item])) {
        foreach (($_SESSION['err'][$item]) as $errmsg) {
            echo "<span style='color:red'>";
            echo "$errmsg";
            echo "</span>";
        }
    }
}

?>

<head>
    <link rel="stylesheet" href="css/add_record.css">
</head>
<form action="api/add_invoice.php" method="post" class="mx-auto">
    <div class="form-row">
        <div class="form-group col-6">
            <label for="date" class="text-muted">日期</label>
            <input type="date" name="date" class="form-control">
            <?= errmsg('date') ?>
        </div>
        <div class="form-group col-6">
            <label for="period">期間</label>
            <select name="period" class="form-control ">
                <option value="1">1，2月</option>
                <option value="2">3，4月</option>
                <option value="3">5，6月</option>
                <option value="4">7，8月</option>
                <option value="5">9，10月</option>
                <option value="6">11，12月</option>
            </select>
            <?= errmsg('period') ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6 w-60">
            <label for="code">代碼</label>
            <input type="text" name="code" class="form-control">
            <?= errmsg('code') ?>
        </div>
        <div class="form-group col-6">
            <label for="number">號碼</label>
            <input type="number" name="number" class="form-control" min="00000001" max="99999999">
            <?= errmsg('number') ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="payment">消費金額</label>
            <input type="number" name="payment" class="form-control" min="1">
            <?= errmsg('payment') ?>
        </div>
        <div class="form-group col-6">
            <label for="type">消費類型</label>
            <select name="type" class="in_type">
                <option value="0">收入</option>
                <option value="1">支出</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6  ">
            <label for="category" 　class="cat-label">　種類　</label>
            <select name="category">
                <option value="breakfast">早餐</option>
                <option value="lunch">午餐</option>
                <option value="dinner">晚餐</option>
                <option value="dinner">其他項目</option>
            </select>
        </div>


        <div class="form-group col-6">
            <label for="method">付款方式</label>
            <select>
                <option value="cash">現金</option>
                <option value="credit">信用卡</option>
                <option value="easy card">悠遊卡</option>
                <option value="online">行動支付</option>
            </select>
        </div>
    </div>
    <!--  </div> -->
    <div class="form-row">
        <div class="form-group col-12">
            <label for="notes">備註</label>
            <input type="textarea" name="notes" class="form-control" rows="1" cols="5">

        </div>
    </div>
    <div class="form-row">


        <input type="submit" value="submit" class="sub-btn">




        <input type="reset" value="reset" class="reset-btn">


    </div>
    </div>
    </div>
    </div>

</form>