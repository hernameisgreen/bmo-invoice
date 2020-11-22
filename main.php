<?php
include_once "api/settings.php";

function errmsg($item){
    if(!empty ($_SESSION['err'][$item])){
        foreach(($_SESSION['err'][$item]) as $errmsg){
            echo "<span style='color:red'>";
            echo "$errmsg";
            echo "</span>";
        }
    }
}

?>
<head>
    <style>
        form{
            height: 25rem;
            width: 25rem;
            margin-top: 5rem;
        }
    </style>
</head>
<form action="api/add_invoice.php" method="post" class="mx-auto">
    <div class="form-row">
        <div class="form-group col-6">
            <label for="date">日期</label>
            <input type="date" name="date" class="form-control" >
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
            <input type="text" name="code" class="form-control" >
            <?= errmsg('code') ?>
        </div>
        <div class="form-group col-6">
            <label for="number">號碼</label>
            <input type="number" name="number" class="form-control" min="00000001" max="99999999" >
            <?= errmsg('number') ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="payment">消費金額</label>
            <input type="number" name="payment" class="form-control" min="1" >
            <?= errmsg('payment') ?>
        </div>
    </div>
    <input type="submit" value="提交" class="btn btn-success">
    <input type="reset" value="重置" class="btn btn-warning">

</form>



