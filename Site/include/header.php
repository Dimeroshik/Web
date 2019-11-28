  			<div class="row">
  				<div class="col-md-3">
  					<a class="logo" href="index.php"><h1>ВолСпорт</h1></a>
  				</div>
  				<div class="col-md-5">
  					<div class="navigation">
  						<a href="stadium.php">Арены</a>
  						<a href="event.php">Мероприятия</a>
  						<a href="players.php">Спортсмены</a>
  					</div>
  				</div>
          <div class="col-md-2 reg">
            <?php 

            if (isset($_SESSION['username'])){
            
              echo $_SESSION['username'].' ';
              echo $_SESSION['date'];
            } 
            ?>
          </div>
          <div class="col-md-2">
            <div class="reg">
              <a href="login.php">Вход</a>
              <a href="register.php">Регистрация</a>
            </div>
          </div>
  			</div>