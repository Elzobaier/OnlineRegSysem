<?php
include ("public/include/header.php");
?>
<br/>

<body class="text-center">
<div style="width: 300px; margin: 0 auto; border: #005cbf solid 1px; padding: 10px; border-radius:10px  ">
<form class="form-signin">
    <img class="mb-4" src="img/logo.jpg" alt="" width="75" height="75">
    <h1 class="h3 mb-3 font-weight-normal">الرجاء تسجيل الدخول</h1>
    <label for="inputEmail" class="sr-only">إسم المستخدم</label>
    <input type="text"  class="form-control" placeholder="إسم المستخدم" required autofocus>
    <label for="inputPassword" class="sr-only">كلمة المرور</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="كلمة المرور" required>
    <div class="checkbox mb-3 text-right">
        <label>
            <input  type="checkbox" value="remember-me"> تذكرني
        </label>
    </div>
    <button class="btn btn-lg btn-success btn-block" type="submit">تسجيل الدخول</button>
    <p class="mt-5 mb-3 text-muted"></p>
</form>
</div>
</body>

<br/>
<?php
include ("public/include/footer.php");
?>
