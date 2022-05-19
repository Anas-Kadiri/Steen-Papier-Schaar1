<?php

require "conn.php";

//HAS zo zie je in de database niet het password maar word het aangepast zodat je niet de password ziet.
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
try {
    $insert_user = $conn->prepare("INSERT INTO users (username,password) values (:username, :password)");
    $insert_user->bindParam(":username", $_POST['username']);
    $insert_user->bindParam(":password", $password );
    $insert_user->execute();
}catch (PDOException $error){
    echo $error->getMessage();
}
header('Location: game.html');


