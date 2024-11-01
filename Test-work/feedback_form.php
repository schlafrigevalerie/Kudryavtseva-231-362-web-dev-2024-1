 <!doctype html>
<link rel="stylesheet" href="first.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap"
  rel="stylesheet"
/>
<?php
include 'feedback_form.html';
?>
<form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="name">ФИО:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>" required>

            <label for="email">Ваш e-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>

            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" required><?php echo isset($_GET['message']) ? htmlspecialchars($_GET['message']) : ''; ?></textarea>

            <label for="category">Тип обращения:</label>
            <select id="category" name="category" required>
                <option value="propose" <?php echo (isset($_GET['category']) && $_GET['category'] == 'propose') ? 'selected' : ''; ?>>Предложение</option>
                <option value="complaint" <?php echo (isset($_GET['category']) && $_GET['category'] == 'complaint') ? 'selected' : ''; ?>>Жалоба</option>
            </select>

            <label>
                <input type="checkbox" name="consent" required>
                Даю согласие на обработку данных
            </label>

            <fieldset>
                <legend>Откуда вы узнали о нас?</legend>
                <label>
                    <input type="radio" name="source" value="internet" <?php echo (isset($_GET['source']) && $_GET['source'] == 'internet') ? 'checked' : ''; ?>> Реклама из интернета
                </label>
                <label>
                    <input type="radio" name="source" value="friends" <?php echo (isset($_GET['source']) && $_GET['source'] == 'friends') ? 'checked' : ''; ?>> Рассказали друзья
                </label>
            </fieldset>

            <label for="file">Прикрепить файл:</label>
            <input type="file" id="file" name="file" accept=".jpg,.jpeg,.png,.pdf">

            <input type="submit" value="Отправить">
        </form>
    </main>

  </body>

  <p>
  &#169; 2024, Иванов Иван Иванович
  <?php
  // Получение текущей даты и времени
  echo "Сформировано " . date("d.m.Y в H-i-s");
  ?>
  </p>
</html>

