<?php
session_start();
include "db.php";

// Получаем ID книги из параметров URL
$book_id = $_GET['id'];

// Получаем информацию о книге из базы данных
$query = "SELECT name, img, description FROM `images_book` WHERE id = '$book_id'";
$result = mysqli_query($mysql, $query);
$book = mysqli_fetch_assoc($result);

if (!$book) {
    echo "Книга не найдена.";
    exit();
}
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
<title>Детали</title>
<style>
body {
    color: white; /* Устанавливаем цвет текста белым */
    background-color: black; /* Устанавливаем черный фон */
    text-align: center; /* Центрируем текст */
}
img {
    margin: 20px 0; /* Добавляем отступы для изображения */
}
a {
    color: #AFEEEE; /* Цвет ссылок */
    text-decoration: none; /* Убираем подчеркивание */
}
a:hover {
    text-decoration: underline; /* Подчеркивание при наведении */
}
button {
    margin-top: 20px; /* Отступ сверху для кнопки */
    padding: 10px 20px; /* Отступы внутри кнопки */
    background-color: #AFEEEE; /* Цвет фона кнопки */
    border: none; /* Убираем рамку */
    color: black; /* Цвет текста кнопки */
    cursor: pointer; /* Курсор при наведении */
}
button:hover {
    background-color: #87CEEB;
}
</style>
</head>
<header>
<div class="name">
<a href="first_user.php">
<img src="что.jpg" width="70px" height="100px" />
</a>
</div>
<div class="menu">
<ul>
<li><a href="assortment_user.php">Ассортимент</a></li>
<li><a href="feedback_form.php">Дайте обратную связь!!</a></li>
<li><a href="bag.php">Корзина</a></li>
<li><a href="first.php">Выйти</a></li>
</ul>
</div>
</header>
<body>

<h1><?php echo $book['name']; ?></h1>
<img src="<?php echo $book['img']; ?>" alt="<?php echo $book['name']; ?>" width="300" height="auto" />
<p><?php echo $book['description']; ?></p>

<!-- Форма для добавления в корзину -->
<form action="add_to_cart.php" method="POST">
<input type="hidden" name="book" value="<?php echo $book_id; ?>">
<button type="submit">Добавить в корзину</button>
</form>

<a href="assortment_user.php">Вернуться к ассортименту</a>

</body>
</html>

<footer>
<p>
&#169; 2024, Иванов Иван Иванович
<?php
// Получение текущей даты и времени
echo "Сформировано " . date("d.m.Y в H-i-s");
?>
</p>
</footer>
</body>
</html>
