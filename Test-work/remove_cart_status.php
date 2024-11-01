<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Статус удаления из корзины</title>
<link rel="stylesheet" href="first.css" />
</head>
<body>
<style>
body {
    color: white;
    background-color: black;
}
a {
    color: #AFEEEE;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
    </style>

<h1>Статус удаления из корзины</h1>


<?php
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'removed':
            echo "<p>Книга успешно удалена из корзины!</p>";
            break;
        case 'error':
            echo "<p>Произошла ошибка при удалении книги из корзины. Пожалуйста, попробуйте еще раз.</p>";
            break;
        default:
            echo "<p>Неизвестный статус.</p>";
            break;
    }
} else {
    echo "<p>Неизвестный статус.</p>";
}
?>

<a href="bag.php">Вернуться в корзину</a>

</body>
</html>

