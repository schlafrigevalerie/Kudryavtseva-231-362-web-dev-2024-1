<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="first.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
        <?php $title = 'Книжный магазин'; ?>
        <title><?php echo $title?> </title>


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
        <?php $message = '<h1 style="color:white;" >Онлайн-магазин современной и классической литературы </h1>'; ?>
        <?php echo $message?>
        <p class="aligncenter">
            <?php
            $s = date('s');	// определяем текущую секунду
            $os = $s % 2;	// вычисляем остаток от деления

            if( $os === 0 )	// если в переменной $os хранится ноль
            $name='bookgirl.jpg'; // сохраняем имя первого файла
            else	// иначе
            $name='bookgirl.jpg'; // сохраняем имя второго файла

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
            <font size=5><span style="color: white">Становитесь нашими читателями, дорогие друзья(´｡• ᵕ •｡`)!</span></font>
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
