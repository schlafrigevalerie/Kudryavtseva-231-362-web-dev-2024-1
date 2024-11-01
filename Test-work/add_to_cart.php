<?php
session_start();
include "db.php";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book'];

    // Получаем информацию о книге из таблицы images_book
    $query = "SELECT name, img, description FROM `images_book` WHERE id = '$book_id'";
    $result = mysqli_query($mysql, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $book = mysqli_fetch_assoc($result);

        // Подготовка запроса для добавления в таблицу bag
        $name = mysqli_real_escape_string($mysql, $book['name']);
        $img = mysqli_real_escape_string($mysql, $book['img']);
        $description = mysqli_real_escape_string($mysql, $book['description']);

        $insert_query = "INSERT INTO `bag` (name, img, description) VALUES ('$name', '$img', '$description')";

        if (mysqli_query($mysql, $insert_query)) {
            // Успешно добавлено
            header("Location: cart_status.php?status=success");
        } else {
            // Ошибка при добавлении
            header("Location: cart_status.php?status=error");
        }
    } else {
        // Книга не найдена
        header("Location: cart_status.php?status=not_found");
    }
    exit();
}
?>

