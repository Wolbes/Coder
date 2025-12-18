<?php
$host = 'localhost';
$dbname = 'arsen';
$user = 'root';
$pass = 'root';
$port = 3306;

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Получаем данные из формы
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // Вставляем нового пользователя в таблицу
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        // После вставки сразу выводим приветствие
        echo "Connexion réussie Bonjour " . htmlspecialchars($username);
    }

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
