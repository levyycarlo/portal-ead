<?php
include "conn.php";
$user = $_POST['user'];
$emailUser = filter_input(INPUT_POST,'emailUser',FILTER_VALIDATE_EMAIL);
$passwordUser = filter_input(INPUT_POST,'passwordUser');
$passwordUserHash = password_hash($passwordUser, PASSWORD_DEFAULT);

echo "$user - $emailUser - $passwordUserHash";



$stmt = $conn->prepare("insert into alunos(user,email,pass) values (:user,:email,:pass)");

$stmt->bindParam(':user',$user);
$stmt->bindParam(':email',$emailUser);
$stmt->bindParam(':pass',$passwordUserHash);

$stmt->execute();
?>