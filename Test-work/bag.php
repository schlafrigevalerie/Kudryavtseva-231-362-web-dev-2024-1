<?php
session_start();
include "db.php";

// Получаем данные из таблицы bag
$result = mysqli_query($mysql, "SELECT * FROM `bag`");
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
<title>Корзина</title>
<style>
table {
    width: 100%; /* Задаем ширину таблицы */
    border-collapse: collapse; /* Убираем двойные границы */
}
th, td {
    border: 1px solid white; /* Границы ячеек */
    padding: 10px; /* Отступы внутри ячеек */
    text-align: left; /* Выравнивание текста */
}
th {
    background-color: #333; /* Цвет фона заголовков */
    color: white; /* Цвет текста заголовков */
}
td {
    color: white; /* Цвет текста ячеек */
}
.delete-column {
    width: 100px; /* Задаем фиксированную ширину для столбца "Удалить" */
}
</style>
</head>
<header>
<div class="name">
<a href="first.php">
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

<span style="color: white">
<h1>Корзина</h1>
<table>
<thead>
<tr>
<th>Название</th>
<th>Описание</th>
<th>Обложка</th>
<th class="delete-column">Удалить</th>
</tr>
</thead>
<tbody>
<?php
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td class="filters__img">
            <img title="<?php echo $row['name'];?>" src="<?php echo $row['img'];?>" width="100" height="auto" />
            </td>
            <td class="delete-column">
            <form action="remove_from_cart.php" method="POST">
            <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>">
            <button type="submit">Удалить</button>
            </form>
            </td>
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='4'>Корзина пуста.</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>Ошибка выполнения запроса: " . mysqli_error($mysql) . "</td></tr>";
}
?>
</tbody>
</table>

<!-- Кнопка для заказа -->
<form action="order.php" method="POST">
<button type="submit">Заказать</button>
</form>



<div class="nap">
<p>
<font size=5><span style="color: white">Кликните для заказа(´｡• ᵕ •｡`)!</span></font>
</p>
</div>
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
