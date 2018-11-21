<!DOCTYPE html>
<html lang="ar" dir="rtl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>نظام التسجيل  الإلكتروني</title>

    <!-- Bootstrap core CSS -->
    <link href="..\Views\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <!-- font awaysome core CSS -->
    <link href="../Views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" type="text/css" rel="stylesheet">

  </head>
<br/>

<br/>

<body class="text-center">
<div style="width: 300px; margin: 0 auto; border: #005cbf solid 1px; padding: 10px; border-radius:10px  ">
    <form class="form-signin" method="post" action="insert.php">
        <img class="mb-4" src="img/logo.jpg" alt="" width="75" height="75">
        <h1 class="h3 mb-3 font-weight-normal">التسجيل</h1>
        <label for="inputEmail" class="sr-only">إسم المستخدم</label><br/>
        <input name="user" type="text"  class="form-control" placeholder="إسم المستخدم" required autofocus>
        <label for="inputPassword" class="sr-only">كلمة المرور</label><br/>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="كلمة المرور" required>
        <label for="inputPassword" class="sr-only">البريد الالكتروني</label><br/>
        <input name="email" type="email" id="inputPassword" class="form-control" placeholder="البريد الالكتروني" required >
        <label for="inputPassword" class="sr-only">السكن </label><br/>
        <input name="adress" type="text" id="inputPassword" class="form-control" placeholder="السكن" required> <br/>
        <button class="btn btn-lg btn-success btn-block" type="submit">التسجيل</button>
        <p class="mt-5 mb-3 text-muted"></p>
    </form>
</div>
</body>

<br/>



<br/>

<br/>

