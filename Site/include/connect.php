<?php 
//$connection = mysqli_connect("localhost","root","");
//$select_db = mysqli_select_db($connection , "site");


$driver = 'mysql';
$host = 'localhost';
$db_name = 'site';
$user = 'nikita062499';
$password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $user, $password, $options);
} catch (PDOException $e) {
    die("не могу");
}
$pdo->prepare('SET NAMES utf8')->execute();

?>