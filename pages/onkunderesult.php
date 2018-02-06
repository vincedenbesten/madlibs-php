<?php
  $kunnen = $_POST['kunnen'];
  $persoon = $_POST['persoon'];
  $getal = $_POST['getal'];
  $vakantie = $_POST['vakantie'];
  $beste = $_POST['beste'];
  $slechtste = $_POST['slechtste'];
  $overkomen = $_POST['overkomen'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Black+Ops+One" />
  </head>
  <body>
    <header>
      <h1>Mad Libs</h1>
    </header>
    <nav>
      <a href="../index.php">Er heerst paniek...</a>
      <a href="onkunde.php">onkunde</a>
    </nav>
    <main>
      <h2>Onkunde</h2>
      <p>Er zijn veel mensen die niet kunnen <?=$kunnen?>. Neem nou <?=$persoon?>, zelfs met de hulp van een <?=$vakantie?> of zelfs <?=$getal?> kan <?=$persoon?> niet <?=$kunnen?>. Dat heeft niet te maken met een gebrek aan <?=$beste?>, maar met een teveel aan <?=$slechtste?>. Te veel <?=$slechtste?> leidt tot <?=$overkomen?> en dat is niet goed als je wilt <?=$kunnen?>. Helaas voor <?=$persoon?>.</p>
    </main>
    <footer>Footer</footer>
  </body>
</html>
