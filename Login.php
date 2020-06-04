<?php
require 'src/auth.php';
require 'src/subscription.php';
// Авторизуємо користувача, якщо в запиті є логін і пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sign in</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url("CSS/img/фон.png");
        }

        .FT{
            background-color: white;
            margin-top: 30px;
        }



        h1{
            color: #FFA812;
            text-shadow: black 2px 3px 1px;
            text-align: center;
        }





    </style>
</head>


<div class="container bgcont center-block">
    <div class="col-md-12">


<body   >

<div>
    <a class="btn btn-dark" href="index.php" role="button">Back to Home Pge</a>
</div>

              <div class="col-md-12">
      <form class="form-signin" method="post">
          <h1>Plese sing in</h1>

          <div class="form-group">
              <label for="inputEmail" class="sr-only">Login</label>
              <input type="text" name="login" id="inputEmail" class="form-control" placeholder="login"
              autofocus>

          </div>

          <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control"  placeholder="Password"
              required>
          </div>
          <button class="btn btn-dark btn-primary btn-block" type="submit">Sign in</button>

      </form>



  </div>
<div class="FT">
<?php if (isAuthorized()): ?>
    <?php require 'views/admin.php' ?>
<?php else: ?>
    <?php require 'login.php' ?>
<?php endif; ?>
    </div>
</body>



</html>