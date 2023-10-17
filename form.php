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
  <div class="site-title">Капибара</div>
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
  <section class="feedback">
    <h2>Обратная связь</h2>
    <form method="POST" action="https://httpbin.org/post" enctype="multipart/form-data">
      <div id="feedbackForm" class="feedback-form">
        <h2>Форма обратной связи</h2>
        <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
          <label for="fullName">ФИО:</label>
          <input type="text" id="fullName" name="fullName" required><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>

          <label>Откуда узнали о нас:</label><br>
          <input type="radio" id="radioInternet" name="howFound" value="internet" checked>
          <label for="radioInternet">Интернет</label><br>
          <input type="radio" id="radioFriend" name="howFound" value="friend">
          <label for="radioFriend">От друга</label><br><br>

          <label for="requestType">Тип обращения:</label>
          <select id="requestType" name="requestType" required>
            <option value="complaint">Жалоба</option>
            <option value="suggestion">Предложение</option>
          </select><br><br>

          <label for="message">Текст сообщения:</label><br>
          <textarea id="message" name="message" rows="6" cols="40" required></textarea><br><br>

          <label for="attachments">Вложения:</label>
          <input type="file" id="attachments" name="attachments"><br><br>

          <input type="checkbox" id="consent" name="consent" required>
          <label for="consent">Даю согласие на обработку персональных данных</label><br><br>

          <input type="submit" value="Отправить">
        </form>
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