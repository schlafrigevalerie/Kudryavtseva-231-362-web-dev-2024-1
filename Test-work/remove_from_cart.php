<?php
session_start();
include "db.php";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'];

    // Удаляем книгу из таблицы bag
    $delete_query = "DELETE FROM `bag` WHERE id = '$book_id'";

    if (mysqli_query($mysql, $delete_query)) {
        // Успешно удалено
        header("Location: remove_cart_status.php?status=removed");
    } else {
        // Ошибка при удалении
        header("Location: remove_cart_status.php?status=error");
    }
    exit();
} else {
    // Если форма не была отправлена, перенаправляем обратно в корзину
    header("Location: bag.php");
    exit();
}
?>

