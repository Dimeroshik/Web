<?php
    session_start();
    require_once("connect.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if (isset($_POST['username']) and isset($_POST['password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result=$pdo->prepare("INSERT INTO  `users` (`username`, `password`, `email`)
                                                VALUES (:username, :password, :email)");
            $result->execute(array('username'=>$username, 'password'=>$password,'email'=>$email));

            if (isset($result)) {
                $result = "1";
            }
            else {
                $result = "2";
            }
        }
        else $result = "3";

    }
    else $result = '4';

    header("Location: /register.php?result=$result");