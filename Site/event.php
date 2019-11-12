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
        <div class="row">
            <div class="col-md-6 test">
              <h3>Ежегодные соревнования хоккеистов</h3>
              <p> <img src="src/event1.jpg" alt="Картинка" align="left" hspace="10"> Каждый год на базе катка "Новое поколение", проходят состязания между командами от 12 до 18 лет, хоть они традиционно проводятся с 15 по 30 ноября, на них очень жарко.</p>
            </div>
            <div class="col-md-6">
              <h3>Чемпионат города по баскетболу среди районов Волгограда</h3>
              <p><img src="src/event2.jpg" alt="Картинка" align="left" hspace="10">
                Ежегодно октябрь становится самым насыщенным спортивными мероприятиями месяцем, этому способствует и Чемпионат города среди районов Волгограда, в котором сойдутся игроки всех возрастов, приходите поддержать своих друзей, близких, да и просто посмотерть за красивой и качественной игрой.</p>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <h3>Юношеское водное поло</h3>
              <p><img src="src/event3.jpg" alt="Картинка" align="left" hspace="10">
                В конце июля бассейн "Спартак" принимает у себя команды по водному поло возрастной категории "16-18", на эти состязания приезжают команды со всех уголков страны, чтобы побороться за титул чемпиона. </p>  
            </div>
            <div class="col-md-6">
              <h3>Студенческая Лига (АСБ) </h3>
              <p> <img src="src/event4.jpg" alt="Картинка " align="left" hspace="10">
                Для студентов нет ничего важнее начала сезона Ассоциации студенческого баскетбола, в замечательном ФОК на 7 ветрах, команды всех вузов нашего города, сойдутся в борьбе за титул сильнейшей команды города и путевки на следующий, всероссийский этап "Лига Белова", весь этот праздник идет с конца октября и до середины апреля.</p>  
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