<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php $pageTitle = "Капибара";
   echo $pageTitle; 
   ?>
   </title>
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
            array("#about", "О капибарах", true), 
            array("#habitat", "Местообитание", false),
            array("#facts", "Интересные факты", false), 
            array("form.php", "Обратная связь", false)
        ); 

        foreach ($menuItems as $item) { 
            $link = $item[0];
            $name = $item[1];
            $current_page = $item[2];
        ?>

        <li>
            <a href="<?php echo $link; ?>"
                <?php if ($current_page) { echo ' class="selected-menu"'; } ?>
            >
            <?php echo $name; ?>
            </a>
        </li>
        <?php
    } 
    ?>
    </ul>
  </nav>
</header>


<main>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $source = $_POST['source'];
    $message = $_POST['message'];
    $attachment = $_POST['attachment'];

    echo '<style>
        .container {
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f1f1f1;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #ddd;
        }

        #feedbackForm{ 
            display: none; 
        }
        h2 { 
            display: none; 
        }

    </style>';

    echo '<div class="container">';
    echo '<h2>Обратная связь</h2>';

    echo '<p>Здравствуйте, '.$name.'</p>';

    if ($_POST['category'] == 'propose') {
        echo '<p>Спасибо за ваше предложение:</p>';
        echo '<textarea>'.$message.'</textarea>';
    } else {
        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
        echo '<textarea>'.$message.'</textarea><br><br>';
    }

    if (!empty($attachment)) {
        echo '<br />Вы приложили следующий файл: '.$attachment;
    }

    echo '<br /><br /><a class="btn" href="index1.php?N='.$name.'&E='.$email.'&S='.$source.'">Заполнить снова</a>';
    echo '</div>';
}

?>

  <section class="feedback">
    <h2>Обратная связь</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div id="feedbackForm" class="feedback-form">
        <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
          <label for="name">ФИО:</label>
          <input type="text" id="name" name="name" required><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>

          <label>Откуда узнали о нас:</label><br>
          <input type="radio" id="radioInternet" name="source" value="internet" checked>
          <label for="radioInternet">Интернет</label><br>
          <input type="radio" id="radioFriend" name="source" value="friend">
          <label for="radioFriend">От друга</label><br><br>

          <label for="category">Тип обращения:</label>
          <select id="category" name="category" required>
            <option value="complaint">Жалоба</option>
            <option value="propose">Предложение</option>
          </select><br><br>

          <label for="message">Текст сообщения:</label><br>
          <textarea id="message" name="message" rows="6" cols="40" required></textarea><br><br>

          <label for="attachment">Вложениe:</label>
          <input type="file" id="attachment" name="attachment"><br><br>

          <input type="checkbox" id="consent" name="consent" required>
          <label for="consent">Даю согласие на обработку персональных данных</label><br><br>

          <input type="submit" value="Отправить">
        </form>
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
</footer>
</body>
</html>