<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php $pageTitle = "Капибара";
   echo $pageTitle; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="site-title"><?php echo $pageTitle; ?></div>
  <nav>
    <ul>
      <?php
        $menuItems = array(
          array("#about", "О капибарах", "menu-item"),
          array("#habitat", "Местообитание", "menu-item"),
          array("#facts", "Интересные факты", "menu-item"),
        );

        foreach ($menuItems as $item) {
          echo "<li><a href='" . $item[0] . "' class='" . $item[2] . "'>" . $item[1] . "</a></li>";
        }
      ?>
    </ul>
  </nav>
</header>
<main>
  <section class="auth-form">
    <h2>Вход в систему</h2>
    <form method="POST" action="index1.php">
      <div class="form-row">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
      </div>
      <div class="form-row">
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-row">
        <input type="checkbox" id="remember" name="remember">
        <label class="checkbox-label" for="remember">Запомнить меня</label>
      </div>
      <div class="form-row">
        <button type="submit" id="loginButton">Войти</button>
      </div>
    </form>
  </section>
</main>
<footer>
  <p>Кучерова Мария, 221-362</p>
  <p>
    <a href="mailto:mmar1yakucherova@yandex.ru">mmar1yakucherova@yandex.ru</a>
    |
    <a href="tel:+79654709795">+7 (965) 470-97-95</a>
  </p>
  <?php
    $formattedDate = date("d.m.Y в H-i:s");
    echo "Сформировано $formattedDate с актуальной датой и временем";
  ?>
</footer>
</body>
</html>