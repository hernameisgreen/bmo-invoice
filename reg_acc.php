<?php
include_once "api/settings.php";
?>
<form action="api/add_user.php" method="post" class="mx-auto w-50 mt-5">
    <div class="form-row">
        <div class="form-group col-7">
            <label for="name">姓名</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group col-7">
            <label for="birthday">生日</label>
            <input type="date" name="birthday" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-7">
            <label for="username">帳號</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group col-7">
            <label for="pw">密碼</label>
            <input type="password" name="pw" class="form-control">
        </div>
    </div>
    <div class= "form-row">
            <div class="form-group col-6 w-60">
                <label for="email">電子信箱</label>
                <input type="email" name="email" class="form-control">
            </div>
       
    </div>
    <div class= "form-row">
            <div class="form-group col-6 w-60">
                <label for="location">國家</label>
                <input type="text" name="location" class="form-control">
            </div>
       
    </div>

    <input type="submit" value="提交" class="btn btn-success">
    <input type="reset" value="重置" class="btn btn-warning">

</form>