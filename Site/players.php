<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="css/main.css">
    <title>Hello, world!</title>
  </head>
  <body>
  		<div class="container">
  		
  			<!-- Header -->
        <?php 
          require "include/header.php";
        ?>
        <!--/Header-->

  			<!--Main-->
          <div class="row player">
            <img class="col-md-1 img_player" src="src/player1.jpeg">
            <p class="col-md-4 name_player">Иванов Иван Иванович</p>
            <p class="col-md-4 kind_of_sport">Баскетбол</p>
            <p class="col-md-3 rank_player">МС</p>
          </div>
          <div class="row player">
            <img class="col-md-1 img_player" src="src/player1.jpeg">
            <p class="col-md-4 name_player">Иванов Иван Иванович</p>
            <p class="col-md-4 kind_of_sport">Баскетбол</p>
            <p class="col-md-3 rank_player">МС</p>
          </div>
          <div class="row player">
            <img class="col-md-1 img_player" src="src/player1.jpeg">
            <p class="col-md-4 name_player">Иванов Иван Иванович</p>
            <p class="col-md-4 kind_of_sport">Баскетбол</p>
            <p class="col-md-3 rank_player">МС</p>
          </div>
          <div class="row player">
            <img class="col-md-1 img_player" src="src/player1.jpeg">
            <p class="col-md-4 name_player">Иванов Иван Иванович</p>
            <p class="col-md-4 kind_of_sport">Баскетбол</p>
            <p class="col-md-3 rank_player">МС</p>
          </div>
          <div class="row player">
            <img class="col-md-1 img_player" src="src/player1.jpeg">
            <p class="col-md-4 name_player">Иванов Иван Иванович</p>
            <p class="col-md-4 kind_of_sport">Баскетбол</p>
            <p class="col-md-3 rank_player">МС</p>
          </div>
  			<!--/Main-->

        <!--Footer-->
  			<div class="footer">
  				<div class="row">
  				<?php require "include/footer.php"; ?>
  			</div>
        <!--/Footer-->
  		</div>		
  </body>
</html>