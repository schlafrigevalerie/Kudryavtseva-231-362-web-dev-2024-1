<?php
include "db.php";
$result = mysqli_query($mysql, "SELECT * FROM `images_book`");
?>

<!DOCTYPE html>
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

<a href="first.php">
<img src="что.jpg" width="70px" height="100px" />
</a>
</div>
<div class="menu">
<ul>
<a href="<?php	// начинаем первый PHP скрипт
$name='Ассортимент'; // переменная с текстом ссылки
$link='assortment.php';	// переменная с адресом ссылки
$current_page=true;	// переменная, определяющая активность пункта меню
echo $link;	// выводим адрес ссылки?>">
<?php	// начинаем второй PHP скрипт
if( $current_page )	// если пункт меню активный
    //echo ' class="selected_menu"'; // выводим соответствующий класс
    echo $name;	// выводим текст ссылки
    ?></a>
    <a href="<?php	// начинаем первый PHP скрипт
    $name='Авторизация!!'; // переменная с текстом ссылки
    $link='login.php';	// переменная с адресом ссылки
    $current_page=true;	// переменная, определяющая активность пункта меню
    echo $link;	// выводим адрес ссылки?>">
    <?php	// начинаем второй PHP скрипт
    if( $current_page )	// если пункт меню активный
        //echo ' class="selected_menu"'; // выводим соответствующий класс
        echo $name;	// выводим текст ссылки
        ?></a>

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
            <td><?php echo $row['name']; ?></td>
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
</span>

&#169; 2024, Иванов Иван Иванович
<?php
// Получение текущей даты и времени
echo "Сформировано " . date("d.m.Y в H-i-s");
?>
</p>
</footer>
</html>

