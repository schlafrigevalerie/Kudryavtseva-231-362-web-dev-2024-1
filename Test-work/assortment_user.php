<?php
include "db.php";
$result = mysqli_query($mysql, "SELECT * FROM `images_book`");
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
<title>Ассортимент</title>
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

<span style="color: white">
<h1>Ассортимент книжной продукции</h1>
<table>
<thead>
<tr>
<th>Название</th>
<th>Описание</th>
<th>Обложка</th>
</tr>
</thead>
<tbody>
<?php
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td>
            <a href="book_details.php?id=<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?>
            </a>
            </td>
            <td><?php echo $row['description']; ?></td>
            <td class="filters__img">
            <img title="<?php echo $row['name'];?>" src="<?php echo $row['img'];?>" width="300" height="auto" />
            </td>
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='3'>Нет данных для отображения.</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Ошибка выполнения запроса: " . mysqli_error($mysql) . "</td></tr>";
}
?>
</tbody>
</table>

<!-- Форма для добавления в корзину -->
<form action="add_to_cart.php" method="POST">
<label for="book">Выберите книгу:</label>
<select name="book" id="book">
<?php
// Сброс результата для повторного использования
mysqli_data_seek($result, 0);
while($row = mysqli_fetch_assoc($result)){
    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
}
?>
</select>
<button type="submit">Добавить в корзину</button>
</form>

</span>

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
