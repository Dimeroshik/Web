<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Hello, world!</title>
  </head>
  <body>
  			<!-- Header -->
        <?php 
            require_once "include/header.php";
        ?>

        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/crud_players/read.php");
        ?>
        <!--/Header-->

  			<!--Main-->
        <div class="mx-5 my-5">

          <?php players_read($pdo); ?>

          <?php
            if ($_SESSION['admin'] == 1) echo "
            <div class='mx-5 my-3'>
          
                <form class='form-inline' action='crud_players\create.php' method='POST'>
                  
                  <input type='text' class='form-control mb-2 mr-sm-2' name='name_1' placeholder='Name_1 Ivanov'>
                  <input type='text' class='form-control mb-2 mr-sm-2' name='name_2' placeholder='Name_2 Ivan'>
                  <input type='text' class='form-control mb-2 mr-sm-2' name='type' placeholder='Sport type'>
                  <input type='text' class='form-control mb-2 mr-sm-2' name='qualification' placeholder='Qualification'>
                
                  <button type='submit' class='btn btn-primary mb-2'>Добавить</button>
                </form>
                
                

            </div>
            ";
            ?>
        </div>

  			<!--/Main-->

        <!--Footer-->
  			<div class="">
  				<?php require "include/footer.php"; ?>
  			</div>
        <!--/Footer-->	
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>