<?php session_start(); ?>
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
        <div class="row p-1 mx-5">
          <div class="col-md-7">
            <p>
              Первый в Вогограде ресурс, на котором вы сможете найти самую разнообразную информацию обо всем и обо всех связанных со спортом в нашем любимом городе.
            </p>
          </div>
          <div class="col-md-5">
            <img src="src\sity.jpeg" alt="Тут Должна Быть Картинка">
          </div>
        </div>


      
        <!--/Main-->

        <!--Footer-->
        <div class="footer">
          <?php require_once "include/footer.php"; ?>
        </div>
        <!--/Footer-->  
  </body>
</html>