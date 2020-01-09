       <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
          <a class="navbar-brand" href="index.php">ВолСпорт</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="stadium.php">Арены<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.php">Мероприятия<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="players.php">Спортсмены<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class='nav-link' href="clubs.php">Клубы<span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <div class="row flex-row-reverse pr-2">
                <form action="search.php" class='' method="post">
                    <input type="text" class="col-md-8">
                    <button type="submit" class="btn btn-success col-md-3 btn-sm">Поиск</button>
                </form>
            </div>
            
            <?php 
            if (isset($_SESSION['username']))
            {
              echo "
              <form>
                <button class='btn btn-secondary mr-2'>Личный кабинет</button>
              </form>
              <form action='include/logout.php'>
                <button class='btn btn-secondary'>Выход</button>
              </form>
              ";
            }
            else
            { 
              echo "
              <form action='login.php'> 
                <button class='btn btn-secondary mr-2'>Войти</button>
              </form>
              <form action='register.php'>
                <button class='btn btn-secondary'>Регистрация</button>
              </form>";
            } 
            ?>
            
          </div>
        </nav>
