<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $sql = "INSERT INTO users (username, email, password)
            VALUES (:username, :email, :password)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "username" => $username,
        "email" => $email,
        "password" => $password
    ]);

   
}
