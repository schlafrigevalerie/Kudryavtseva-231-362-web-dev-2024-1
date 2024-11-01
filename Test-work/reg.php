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
<title><?php echo $title ?> </title>
</head>
<header>
<div class="name">
<a href="first.php">
<img src="что.jpg" width="70px" height="100px" />
</a>
</div>
<div class="menu">
<ul>
<a href="assortment.php">Ассортимент</a>
<a href="login.php">Авторизация!!</a>
</ul>
</div>
</header>
<body>
<main>
<h1 class="white-text">Регистрация</h1>
<form action="add_user.php" method="POST">
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

<div>
<label>
<input type="checkbox" name="consent" required>
Даю согласие на обработку данных
</label>
</div>

<button type="submit">Зарегистрироваться</button>
</form>
</main>

<footer>
<p>
здесь будет телефончик и контакты там разные почта телега почтовый индекс
</p>
</footer>
</body>
</html>
