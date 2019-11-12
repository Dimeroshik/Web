<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

   <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="css/main.css">
    <title>ВолСпорт</title>
  </head>
  <body>
  		<div class="container">
  		
  			<!-- Header -->
        <?php 
        require "include/header.php";
        ?>
        <!--/Header-->

  			<!--Main-->
  			<div class="row">
          <div class="col-md-4">
            <img src="src/stadium1.jpg" alt="Картинка">
            <h3>Каток <br>"Новое поколение"</h3>
            <p>Комплекс предоставляет замечательный каток на котором дети становятся восходящими звездами в фигурном катании и хоккее. Также в выходные двери открыты и для непрофессионалов, желающих просто покататься в компании друзей или девушки.</p>
          </div>
          <div class="col-md-4">
            <img src="src/stadium2.jpg" alt="Картинка">
            <h3>"Альянс-Баскет"</h3>
            <p>Совсем недавно построенный, коммплекс принимает у себя футболистов, хоккеистов, волейболистов и не только, тут, под присмотром квалифициррованных тренеров каждый сможет найти себе занятие спортом по душе.</p>
          </div>
          <div class="col-md-4">
            <img src="src/stadium3.jpg" alt="Картинка">
            <h3>"Спартак"</h3>
            <p>Комплекс, построенный как арена для проведения матчей по водному поло, уже несколько лет воспитывает юношеские команды в этом виде спорта, также ждет посетителей, предоставляя им возможность поплать после тяжелого рабочего дня, оснащен несколькими тренажерными залами, в которых каждый желающий может поддерживать себя в отличной форме.</p>
          </div>   
        </div>
  			<!--/Main-->

        <!--Footer-->
  			<div class="footer std">
  				<?php require "include/footer.php"; ?>
  			</div>
        <!--/Footer-->
  		</div>		
  </body>
</html>