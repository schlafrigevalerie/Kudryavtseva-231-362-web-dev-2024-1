<?php
include "db.php";

$statusMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img_name = $_POST['img_name'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT INTO images_book (name, img, description) VALUES ('$name', '$img_name', '$description')";

    if (mysqli_query($mysql, $query)) {
        $statusMessage = "Запись добавлена!";
    } else {
        $statusMessage = "Запись не добавлена: " . mysqli_error($mysql);
    }
}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="first.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
<title>Статус добавления записи</title>
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
$name='Аннотация'; // переменная с текстом ссылки
$link='terms.php';	// переменная с адресом ссылки
$current_page=true;	// переменная, определяющая активность пункта меню
echo $link;	// выводим адрес ссылки?>">
<?php	// начинаем второй PHP скрипт
if( $current_page )	// если пункт меню активный
    //echo ' class="selected_menu"'; // выводим соответствующий класс
    echo $name;	// выводим текст ссылки
    ?></a>
    <a href="<?php	// начинаем первый PHP скрипт
    $name='дайте обратную связь!!'; // переменная с текстом ссылки
    $link='feedback_form.php';	// переменная с адресом ссылки
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
<h1><?php echo $statusMessage; ?></h1>
</span>
<p class="aligncenter">
<button
onclick="window.location.href='terms.php'"
style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;"
onmouseover="this.style.backgroundColor='#45a049';"
onmouseout="this.style.backgroundColor='#4CAF50';">
Вернуться на главную страницу
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
