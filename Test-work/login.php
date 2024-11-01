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
    <style>
        /* Добавляем стили для центрирования и цвета текста */
        .centered-link {
            text-align: center; /* Центрируем текст */
            margin-top: 20px; /* Отступ сверху */
        }
        .centered-link a {
            color: white; /* Цвет текста */
            text-decoration: none; /* Убираем подчеркивание */
            font-size: 18px; /* Размер шрифта */
        }
        .centered-link a:hover {
            text-decoration: underline; /* Подчеркивание при наведении */
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
            <a href="<?php
                $name='Ассортимент'; // переменная с текстом ссылки
                $link='assortment.php'; // переменная с адресом ссылки
                $current_page=true; // переменная, определяющая активность пункта меню
                echo $link; // выводим адрес ссылки?>">
                <?php
                if( $current_page ) // если пункт меню активный
                    echo $name; // выводим текст ссылки
                ?></a>
            <a href="<?php
                $name='Авторизация!!'; // переменная с текстом ссылки
                $link='login.php'; // переменная с адресом ссылки
                $current_page=true; // переменная, определяющая активность пункта меню
                echo $link; // выводим адрес ссылки?>">
                <?php
                if( $current_page ) // если пункт меню активный
                    echo $name; // выводим текст ссылки
                ?></a>
        </ul>
    </div>
</header>
<body>
<main>
    <h1 class="white-text">Авторизация</h1>
    <form action="auth_user.php" method="POST">
        <div>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="role">Роль:</label>
            <select id="role" name="role" required>
                <option value="user">Пользователь</option>
                <option value="admin">Администратор</option>
            </select>
        </div>

        <button type="submit">Войти</button>
    </form>
    <div class="centered-link">
        <p><a href="reg.php">Зарегистрироваться</a></p>
    </div>
</main>

<footer>
    <p>
        здесь будет телефончик и контакты там разные почта телега почтовый индекс
    </p>
</footer>
</body>
</html>
