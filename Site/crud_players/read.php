<?php
function players_read($pdo)
{
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/connect.php");
//$array = "SELECT * FROM players";
    $result = $pdo->query("SELECT * FROM players");

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nameFirst = $row['Name_1'];
        $nameSecond = $row['Name_2'];
        $sportType = $row['Type'];
        $qualification = $row['Qualification'];
        $id = $row['id'];
        if ($_SESSION['username'] == 'admin') {
            echo "
            <div class='card mb-1'>
                <div class='row card-body p-2'>
                    <div class='col-md-1 d-flex flex-wrap align-content-center'>
                        <img class='players_image' src='../src/player1.jpg' alt='Card image cap' width='30' height='30'>
                    </div>                    
                    <p class='col-md-3 name_player'>$nameFirst $nameSecond</p>
                    <p class='col-md-3 kind_of_sport'>$sportType</p>
                    <p class='col-md-2 rank_player'>$qualification</p>
                    <button class='btn btn-warning col-md-1' data-toggle='modal' data-target='.bd-$id'>Изменить</button>
                    <form action='crud_players\delete.php' class='col-md-1' method='POST'>
                        <input type='hidden' name='id' value='$id'>
                        <button type='submit' class='btn btn-danger'>Удалить</button>
                    </form>
                </div>
    
                <div class='modal fade bd-$id' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                        <div class='modal-content'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3> Изменение </h3>
                                    <form class='form-inline row' action='crud_players\update.php' method='POST'>
                                        
                                        <input type='hidden' name='id' value='$id'>
    
                                        <label class='col-md-2'>Фамилия</label>
                                        <input type='text' class='form-control mb-2 col-md-10' name='name_1' placeholder='Name_1'>
    
                                        <label class='col-md-2'>Имя</label>
                                        <input type='text' class='form-control mb-2 col-md-10' name='name_2' placeholder='Name_2 Ivan'>
    
                                        <label class='col-md-2'>Тип Спорта</label>
                                        <input type='text' class='form-control mb-2 col-md-10' name='type' placeholder='Sport type'>
    
                                        <label class='col-md-2'>Разряд</label>
                                        <input type='text' class='form-control mb-2 col-md-10' name='qualification' placeholder='Qualification'>
    
                                        <button type='submit' class='btn btn-primary mb-2 col-md-2 ml-5'>Изменить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        ";
        } else {
            echo "
            <div class='card mb-1'>
                <div class='row card-body p-2'>
                    <div class='col-md-1 d-flex flex-wrap align-content-center'>
                        <img class='players_image' src='../src/player1.jpg' alt='Card image cap' width='30' height='30'>
                    </div>                    
                    <p class='col-md-3 name_player'>$nameFirst $nameSecond</p>
                    <p class='col-md-3 kind_of_sport'>$sportType</p>
                    <p class='col-md-2 rank_player'>$qualification</p>
                </div>
            </div>
        ";
        }
    }
}
?>


