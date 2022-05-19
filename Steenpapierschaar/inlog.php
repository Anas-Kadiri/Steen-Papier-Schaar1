<?php

require "conn.php";
/*Pak de gebruiker van het inlog.html formulier*/
$get_user = $conn->prepare("SELECT * FROM users WHERE username = :username");
$get_user->bindParam(":username", $_POST['username']);
$get_user->execute();
$user = $get_user->fetch();
$password = $_POST['password'];
//hier word er gekeken naar of de username en password vanuit de database klopt zo niet kan je niet worden ingelogd.
if (password_verify($password, $user['password'])) {
    setcookie("logged_in", true, time() + (86400 * 30), "/");
    header('Location: game.html');
} else {
  header('location:inlog.html');
}

