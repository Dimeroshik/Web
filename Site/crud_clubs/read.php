<?php
function clubs_read($pdo)
{
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/connect.php");
    $result = $pdo->query("SELECT * FROM `clubs`");

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['name'];
        $id = $row['id'];

        if ($_SESSION['username'] == 'admin') {
            echo "

            <div class='col-md-5 mr-2 mb-2'>
                <div class='card'>
                    <div class='card-body'>
                        <h4 class='card-title'>$name</h4>
                        <h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>
                        <p class='card-text'>
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <div class='row'>
                            <button class='btn btn-warning mx-5' data-toggle='modal' data-target='.bd-$id'>Изменить</button>
                            <form action='crud_clubs\delete.php' class='col-md-1' method='POST'>
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' class='btn btn-danger'>Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class='modal fade bd-$id' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                        <div class='modal-content'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3> Изменение </h3>
                                    <form class='form-inline row' action='crud_clubs\update.php' method='POST'>

                                        <input type='hidden' name='id' value='$id'>

                                        <label class='col-md-2'>Название клуба</label>
                                        <input type='text' class='form-control mb-2 col-md-10' name='name' placeholder='Name'>

                                        <button type='submit' class='btn btn-primary mb-2 col-md-2 ml-5'>Изменить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        ";
        } else {
            echo "
            <div class='col-md-5 mr-2 mb-2'>
                <div class='card'>
                    <div class='card-body'>
                        <h4 class='card-title'>$name</h4>
                        <h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>
                        <p class='card-text'>
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        ";
        }
    }
}
?>


