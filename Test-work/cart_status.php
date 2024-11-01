<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Статус добавления в корзину</title>
<link rel="stylesheet" href="first.css" />
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
</head>
<body>

<h1>Статус добавления в корзину</h1>

<?php
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            echo "<p>Книга успешно добавлена в корзину!</p>";
            break;
        case 'error':
            echo "<p>Произошла ошибка при добавлении книги в корзину. Пожалуйста, попробуйте еще раз.</p>";
            break;
        case 'not_found':
            echo "<p>Книга не найдена. Пожалуйста, выберите другую книгу.</p>";
            break;
        default:
            echo "<p>Неизвестный статус.</p>";
            break;
    }
} else {
    echo "<p>Неизвестный статус.</p>";
}
?>

<a href="assortment_user.php">Вернуться к ассортименту</a>

</body>
</html>
