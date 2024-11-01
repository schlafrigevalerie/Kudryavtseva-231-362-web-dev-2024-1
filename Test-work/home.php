<body>
<h1>Ваше обращение успешно отправлено!</h1>

<?php
if (isset($_GET['name'])) {
    echo '<p>Здравствуйте, ' . htmlspecialchars($_GET['name']) . '</p>';
    if ($_GET['category'] == 'propose') {
        echo '<p>Спасибо за Ваше предложение:</p>';
    } else {
        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
    }

    // Отображение сообщения
    echo '<p>' . nl2br(htmlspecialchars($_GET['message'])) . '</p>';

    // Проверка наличия загруженного файла
    if (isset($_GET['file']) && !empty($_GET['file'])) {
        echo '<p>Вы прикрепили файл: <a href="' . htmlspecialchars($_GET['file']) . '" target="_blank">' . htmlspecialchars(basename($_GET['file'])) . '</a></p>';
    } else {
        echo '<p>Файл не был загружен или произошла ошибка.</p>';
    }

    echo '<a href="feedback_form.php?name=' . urlencode($_GET['name']) . '&email=' . urlencode($_GET['email']) . '&source=' . urlencode($_GET['source']) . '&category=' . urlencode($_GET['category']) . '&message=' . urlencode($_GET['message']) . '">Заполнить снова</a>';
} else {
    echo '<p>Не удалось получить данные.</p>';
}
?>
</body>
