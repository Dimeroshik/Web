<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/include/connect.php");

if (isset($_POST['name_1']) && isset($_POST['name_2']) && isset($_POST['type'])
    && isset($_POST['qualification']) && isset($_POST['id']))
{

    $nameFirst = $_POST['name_1']; $nameSecond = $_POST['name_2'];
    $type = $_POST['type']; $qual = $_POST['qualification'];
    $id = $_POST['id'];
//            $query = "INSERT INTO   players (Name_1, Name_2, Type, Qualification)
//                        VALUES ('$nameFirst', '$nameSecond', '$type', '$qual')";
//            $result = mysqli_query($connection, $query);
    $result=$pdo->prepare("UPDATE `players` SET `Name_1`= :nameFirst,`Name_2`= :nameSecond,`Type`= :type,`Qualification`=:qual WHERE `id`= :id");
    $result->execute(array('nameFirst'=>$nameFirst,'nameSecond'=>$nameSecond,'type'=>$type,'qual'=>$qual, 'id'=>$id));
    if(isset($result))
    {
        $result = 1;
    }
    else $result = 2;
    header("Location: /players.php?result=$result");
}  ?>