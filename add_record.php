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
    <style>
        form {
            height: 100%;
            width: 60%;
            margin-top: 2rem;
        }
    </style>
</head>
<form action="api/add_invoice.php" method="post" class="mx-auto">
    <div class="form-row">
        <div class="form-group col-6">
            <label for="date">日期</label>
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
            <div class="form-check-inline form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="type" id="" value="income"> 收入
                </label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="type" id="" value="expense"> 支出
                </label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="category">種類</label>
                <select name="category">
                    <option value="breakfast">早餐</option>
                    <option value="lunch">午餐</option>
                    <option value="dinner">晚餐</option>
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
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="notes">備註</label>
            <input type="textarea" name="notes" class="form-control" rows="1" cols="5">

        </div>
    </div>
    </div>
    </div>
    <input type="submit" value="submit" class="btn btn-success">
    <input type="reset" value="reset" class="btn btn-warning">

</form>