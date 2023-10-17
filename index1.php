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
  <section id="about">
    <h1>Капибара - самый большой грызун на земле</h1>
    <p>Капибара (лат. Hydrochoerus hydrochaeris) — крупнейший представитель отряда грызунов,
      встречающийся в природе в Южной и Центральной Америке.</p>

    <?php
      $currentSecond = date("s");
      $imageName = ($currentSecond % 2 == 0) ? 'photo_2023-09-14_04-37-35.jpg' : 'photo_2023-09-17_20-26-33.jpg';
      echo "<img src='$imageName' alt='Капибара' width='800' height='550'>";
    ?>
</section>
  <section id="habitat">
    <h2>Местообитание</h2>
    <p>Капибары живут в тропических регионах Западной и Южной Америки, где обитают вблизи воды.
      Они предпочитают жить в зарослях растительности у водоёмов (рек, озёр, болот) и атоллов.</p>
    <table>
      <tr>
        <th>Научное название</th>
        <th>Местообитание</th>
        <th>Размер</th>
      </tr>
      <tr>
        <td>Hydrochoerus hydrochaeris</td>
        <td>Южная и Центральная Америка</td>
        <td>Длина тела: 1,1 - 1,3 м, вес: 35 - 66 кг</td>
      </tr>
    </table>
  </section>

  <section id="facts">
    <h2>Интересные факты о капибарах</h2>
    <ul>
      <li>Капибары обладают редкой способностью погружаться под воду и задерживать дыхание на несколько минут.</li>
      <li>Они отлично следят за своими детенышами и переносят их на себе, когда те маленькие.</li>
      <li>Капибары имеют брюхоногие конечности, что позволяет им отлично плавать.</li>
    </ul>
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