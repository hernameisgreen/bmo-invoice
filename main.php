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
            <input type="date" name="date" class="form-control">
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
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6 w-60">
            <label for="code">代碼</label>
            <input type="text" name="code" class="form-control ">
        </div>
        <div class="form-group col-6">
            <label for="number">號碼</label>
            <input type="number" name="number" class="form-control" min="00000001" max="99999999">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="payment">消費金額</label>
            <input type="number" name="payment" class="form-control">
        </div>
    </div>
    <input type="submit" value="提交" class="btn btn-success">
    <input type="reset" value="重置" class="btn btn-warning">

</form>



