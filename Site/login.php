<?php session_start();
//require_once "include/login_check.php" ?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Новостной ресурс "ВолСпорт"</title>
  </head>
  <body>
        <!-- Header -->
       <?php 
       require_once "include/header.php";
       ?>
        <!--/Header-->

        <!--Main-->
        <div class="mx-5 my-3">
          <form action="include/scr_login.php" method="POST">
            <h3>Авторизация</h3>
            <div class="form-group row">
              <label for="inputlogin" class="col-sm-2 col-form-label">Имя пользователя</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputlogin" placeholder="Login" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputpass" class="col-sm-2 col-form-label">Пароль</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputpass" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Вход</button>
              </div>
            </div>
          </form>

        <?php 

        if ($_GET['result'] == 1) {
          echo '
            <div class="alert alert-primary" role="alert">
              <strong>Well done!</strong> Вы успешно авторизовались.
            </div>';
        }
        if ($_GET['result'] == 2) {
          echo "
            <div class='alert alert-warning' role='alert'>
              <strong>Warning!</strong> Неверный Пароль.
            </div>";
        }
        if ($_GET['result'] == 3){
          echo "
            <div class='alert alert-warning' role='alert'>
              <strong>Warning!</strong> Нет пользователя.
            </div>";
        }
         ?>
                  
        </div> 
        <!--/Main-->

        <!--Footer-->
        <div class="footer">
          <?php require_once "include/footer.php"; ?>
        </div>
        <!--/Footer-->
   
  </body>
</html>