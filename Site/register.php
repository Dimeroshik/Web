<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

   <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="css/main.css">
    <title>Новостной ресурс "ВолСпорт"</title>
  </head>
  <body>
      <div class="container">

      
        <!-- Header -->
       <?php 
       require "include/header.php";
       ?>
        <!--/Header-->

        <!--Main-->
        <?php 
        require("include/connect.php"); 

        if (isset($_POST['username']) and isset($_POST['password'])) {
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $query = "INSERT INTO   users (username, password, email) VALUES ('$username', '$password', '$email')";
          $result = mysqli_query($connection, $query);

          if (isset($result)) { 
            $smsg = "Регистрация прошла успешно";
          }
          else {
            $fsmsg = "Ошибка";
          }
        }
        ?>

        <?php if (isset($smsg)){ ?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
        <?php if (isset($fsmsg)) { ?> <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php } ?>

          <form class="form-signs" method="POST">
            <h3>Регистрация</h3>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
          </form>
        <!--/Main-->

        <!--Footer-->
        <div class="footer">
          <?php require "include/footer.php"; ?>
        </div>
        <!--/Footer-->
      </div>    
  </body>
</html>