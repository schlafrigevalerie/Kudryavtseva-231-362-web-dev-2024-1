<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $source = isset($_POST['source']) ? $_POST['source'] : '';

    // Проверка загрузки файла
    $file_uploaded = false;
    $file_path = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = basename($_FILES['file']['name']);
        $file_path = 'uploads/' . $file_name;

        // Перемещение файла в папку uploads
        if (move_uploaded_file($file_tmp, $file_path)) {
            $file_uploaded = true;
        }
    }

    // Редирект на home.php с данными
    header("Location: home.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&message=" . urlencode($message) . "&category=" . urlencode($category) . "&source=" . urlencode($source) . "&file=" . urlencode($file_path));
    exit;
}
?>
