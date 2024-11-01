<?php
session_start();

// Проверка, авторизован ли пользователь
if (!isset($_SESSION['name'])) {
    header("Location: login.php"); // Перенаправление на страницу авторизации, если не авторизован
    exit();
}
?>

<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="first.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
<title>Книжный магазин</title>
</head>
<header>
<div class="name">
<a href="first_admin.php">
<img src="что.jpg" width="70px" height="100px" />
</a>
</div>
<div class="menu">
<ul>
<li><a href="terms.php">Ассортимент</a></li>
<li><a href="first.php">Выйти</a></li>
</ul>
</div>
</header>

<body>
<h1 style="color:white;">Добро пожаловать, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
<p class="aligncenter">
<?php
$s = date('s'); // определяем текущую секунду
$os = $s % 2; // вычисляем остаток от деления

if ($os === 0) // если в переменной $os хранится ноль
    $name = 'bookgirl.jpg'; // сохраняем имя первого файла
    else // иначе
        $name = 'bookgirl.jpg'; // сохраняем имя второго файла

        echo '<img src="' . $name . '" alt="Меняющаяся фотография">'; // выводим сформированный HTML‐код
        ?>
        </p>

        <span style="color: white">
        <table>
        <caption>
        <font size=5>Самые популярные книги</font>
        </caption>
        <thead>
        <tr>
        <td>Автор</td>
        <td>Название</td>
        <td>Год</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $books = [
            ['author' => 'Венедикт Ерофеев', 'title' => '"Москва-Петушки"', 'year' => 1969],
            ['author' => 'Джон Стейнбек', 'title' => '"Гроздья гнева"', 'year' => 1939],
            ['author' => 'Эмили Бронте', 'title' => '"Грозовой перевал"', 'year' => 1844],
            ['author' => 'Сергей Беликов', 'title' => '"Бритоголовые. Всё о скинхедах"', 'year' => 2011],
            ['author' => 'Сильвия Плат', 'title' => 'Полное собрание стихотворений на русском языке', 'year' => 2005],
        ];

        foreach ($books as $book) {
            echo "<tr>
            <td>{$book['author']}</td>
            <td>{$book['title']}</td>
            <td>{$book['year']}</td>
            </tr>";
        }
        ?>
        </tbody>
        </table>
        </span>

        <div class="nap">
        <p>
        </p>
        </div>
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


