<?php
include "db.php";

// Включаем отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

$statusMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Проверяем, что данные действительно были отправлены
    if (isset($_POST['name'], $_POST['password'], $_POST['role'], $_POST['consent'])) {
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хешируем пароль
        $role = $_POST['role'];

        // Подготовленный запрос для предотвращения SQL-инъекций
        $stmt = $mysql->prepare("INSERT INTO users (name, password, role) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Ошибка подготовки запроса: " . $mysql->error);
        }

        $stmt->bind_param("sss", $name, $password, $role);

        if ($stmt->execute()) {
            $statusMessage = "Пользователь успешно зарегистрирован!";
        } else {
            $statusMessage = "Ошибка регистрации: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $statusMessage = "Ошибка: не все данные были отправлены.";
    }
}

$mysql->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="first.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
<title>Статус добавления пользователя</title>
</head>
<body>
<span style="color: white">
<h1><?php echo $statusMessage; ?></h1>
</span>
<p class="aligncenter">
<button onclick="window.location.href='first.php'" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#45a049';" onmouseout="this.style.backgroundColor='#4CAF50';">
Вернуться на главную страницу
</button>
</p>
</body>

