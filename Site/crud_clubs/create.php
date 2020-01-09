<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/include/connect.php");

if (isset($_POST['name_club']))
{

    $result=$pdo->prepare("INSERT INTO `clubs` (`name`) VALUES (:name)");
    $result->execute(array('name' => $_POST['name_club']));

    if(isset($result))
    {
        $result = 1;
    }
    else $result = 2;
    header("Location: /clubs.php?result=$result");
}
?>