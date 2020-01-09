<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/include/connect.php");

if (isset($_POST['id']))
{


    $result=$pdo->prepare("DELETE FROM `players` WHERE `id`=:id");
    $result->execute(array('id' => $_POST['id']));
    if(isset($result))
    {
        $result = 1;
    }
    else $result = 2;
    header("Location: /players.php?result=$result");
}
?>