<?php
  $huisdier = $_POST['huisdier'];
  $persoon = $_POST['persoon'];
  $wonen = $_POST['wonen'];
  $vervelen = $_POST['vervelen'];
  $speelgoed = $_POST['speelgoed'];
  $docent = $_POST['docent'];
  $kopen = $_POST['kopen'];
  $hobby = $_POST['hobby'];
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
      <h2>Er heerst paniek...</h2>
      <p>Er heerst paniek in het koninkrijk <?php echo $wonen ?>. Koning <?php echo $docent ?> is ten einde raad en als koning <?php echo $docent ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $persoon ?>.</p>
      <p>"<?php echo $persoon ?>! Het is een ramp! Het is een schande!"</p>
      <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
      <p>"Mijn <?php echo $huisdier ?> is verdwenen! Zo maar, zonder waarscchuwing. En Ik had net <?php echo $speelgoed ?> voor hem gekocht!"</p>
      <p>"Majesteit, uw <?php echo $huisdier ?> komt vast vanzelf weer terug?"</p>
      <p>"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $hobby ?> leren?"</p>
      <p>"Maar Sire, daar kunt u toch uw <?php echo $kopen ?> voor gebruiken."</p>
      <p>"<?php echo $docent ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jouw niet had."</p>
      <p>"<?php echo  $vervelen ?>, Sire."</p>
    </main>
    <footer>Footer</footer>
  </body>
</html>
