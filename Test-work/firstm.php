<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="first.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
</head>

<header>
    <div class="name">
            <a href="first.html">
            <img src="что.jpg" width="70px" height="100px" />
        </a>
    </div>
   <div class="menu">
        <ul>
            <li><a href="form_aut.html">вход для читателей</a></li>
            <li><a href="">электронная библиотека</a></li>
            <li><a href="feedback_form.php">дайте обратную связь!!!</a></li>
        </ul>
    </div>
</header>

    <body>
             <h1><?php echo $pageTitle; ?></h1>
     

        <h1><?php style="color: white" echo $Онлайн-библиотека современной и классической литературы; ?></h1>
        <p class="aligncenter">
            <?php
            $s = date('s');	// определяем текущую секунду
            $os = $s % 2;	// вычисляем остаток от деления

            if( $os === 0 )	// если в переменной $os хранится ноль
            $name='bookgirl.jpg'; // сохраняем имя первого файла
            else	// иначе
            $name='second.jpg'; // сохраняем имя второго файла

    echo '<img src="'.$name.'" alt="Меняющаяся фотография">'; // выводим сформированный HTML‐код
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
                // Массив популярных книг
                $books = [
                    ["author" => "Венедикт Ерофеев", "title" => '"Москва-Петушки"', "year" => 1969],
                    ["author" => "Джон Стейнбек", "title" => '"Гроздья гнева"', "year" => 1939],
                    ["author" => "Эмили Бронте", "title" => '"Грозовой перевал"', "year" => 1844],
                    ["author" => "Сергей Беликов", "title" => '"Бритоголовые. Всё о скинхедах"', "year" => 2011],
                    ["author" => "Сильвия Плат", "title" => "Полное собрание стихотворений на русском языке", "year" => 2005]
                ];

                // Генерация строк таблицы
                foreach ($books as $book) {
                    echo "<tr>";
                    echo "<td>{$book['author']}</td>";
                    echo "<td>{$book['title']}</td>";
                    echo "<td>{$book['year']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </span>

    <div class="nap">
        <p>
            <font size=5><span style="color: white">Становитесь нашими читателями, дорогие друзья(´｡• ᵕ •｡`)!</span>
            </font>
        </p>
    </div>
</body>
<footer>
    <p>
        &#169; 2024, Иванов Иван Иванович
    </p>
</footer>
</html>
