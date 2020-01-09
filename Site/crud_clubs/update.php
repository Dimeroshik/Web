<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/include/connect.php");

if (isset($_POST['id']) && isset($_POST['name']))
{

    $result=$pdo->prepare("UPDATE `clubs` SET `name` = :name WHERE `id`=:id");
    $result->execute(array('id'=>$_POST['id'], 'name'=>$_POST['name']));
    if(isset($result))
    {
        $result = 1;
    }
    else $result = 2;
    header("Location: /clubs.php?result=$result");
}  ?>