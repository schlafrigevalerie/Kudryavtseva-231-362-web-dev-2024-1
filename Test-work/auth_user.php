<?php
include "db.php";

$statusMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    // Роль, выбранная пользователем, не используется для авторизации
    // $role = $_POST['role']; // Эта строка не нужна для авторизации

    // Подготовленный запрос для предотвращения SQL-инъекций
    $stmt = $mysql->prepare("SELECT password, role FROM users WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword, $role);
        $stmt->fetch();

        // Проверяем пароль
        if (password_verify($password, $hashedPassword)) {
            // Успешная авторизация
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;

            // Перенаправление в зависимости от роли
            if ($role === 'user') {
                header("Location: first_user.php"); // Перенаправление на страницу администратора
            } else {
                header("Location: first_admin.php"); // Перенаправление на страницу пользователя
            }
            exit();
        } else {
            $statusMessage = "Неверный пароль.";
        }
    } else {
        $statusMessage = "Пользователь не найден.";
    }

    $stmt->close();
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
<title>Статус авторизации</title>
</head>
<body>
<span style="color: white">
<h1><?php echo $statusMessage; ?></h1>
</span>
<p class="aligncenter">
<button onclick="window.location.href='login.php'" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#45a049';" onmouseout="this.style.backgroundColor='#4CAF50';">
Вернуться на страницу авторизации
</button>
</p>
</body>
<footer>
<p>
&#169; 2024, Иванов Иван Иванович
<?php
// Получение текущей даты и времени
echo "Сформировано " . date("d.m.Y в H-i-s");
?>
</p>
</footer>
</html>
