<?php
$host = "localhost";
$db = "escola";
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user, $pass);
} catch (PDOException $err) {
    echo " Deu um erro:".$err;
}
?>