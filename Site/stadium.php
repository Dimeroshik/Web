<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ВолСпорт</title>
  </head>
  <body>
  		
  			<!-- Header -->
        <?php 
        require_once "include/header.php";
        ?>
        <!--/Header-->

  			<!--Main-->
        <div class="row m-5">

            <div class="card col-md-3 p-1 mr-5">
                <img class="card-img-top" src="src/stadium1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">"Новое поколение"</h4>
                    <p class="card-text">
                        Комплекс предоставляет замечательный каток на котором дети становятся восходящими звездами в
                        фигурном катании и хоккее. Также в выходные двери открыты и для непрофессионалов, желающих
                        просто покататься в компании друзей или девушки.
                    </p>
                </div>
            </div>

            <div class="card col-md-3 p-1 mr-5">
                <img class="card-img-top" src="src/stadium2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">"Альянс-Баскет"</h4>
                    <p class="card-text">
                        Совсем недавно построенный, коммплекс принимает у себя футболистов, хоккеистов, волейболистов и
                        не только, тут, под присмотром квалифициррованных тренеров каждый сможет найти себе занятие
                        спортом по душе.
                    </p>
                </div>
            </div>

            <div class="card col-md-3 p-1">
                <img class="card-img-top" src="src/stadium1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">"Спартак"</h4>
                    <p class="card-text">
                        Комплекс, построенный как арена для проведения матчей по водному поло, уже несколько лет
                        воспитывает юношеские команды в этом виде спорта, также ждет посетителей, предоставляя им
                        возможность поплать после тяжелого рабочего дня, оснащен несколькими тренажерными залами,
                        в которых каждый желающий может поддерживать себя в отличной форме.
                    </p>
                </div>
            </div>
        </div>
  			<!--/Main-->

        <!--Footer-->
  			<div class="">
  				<?php require_once "include/footer.php"; ?>
  			</div>
        <!--/Footer-->		
  </body>
</html>