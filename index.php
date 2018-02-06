<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Black+Ops+One" />
  </head>
  <body>
    <header>
      <h1>Mad Libs</h1>
    </header>
    <nav>
      <a href="#">Er heerst paniek...</a>
      <a href="pages/onkunde.php">onkunde</a>
    </nav>
    <main>
      <h2>Er heerst paniek...</h2>
      <div>
        <ul>
          <li>Welk dier zou je nooit als huisdier willen hebben?</li>
          <li>Wie is de belangrijkste persoon in leven?</li>
          <li>In welk land zal je graag willen wonen?</li>
          <li>Wat doe je als je je verveelt?</li>
          <li>Met welk speelgoed speelde je als kind het meest?</li>
          <li>Bij welke docent spijbel je het liefst?</li>
          <li>Als je €100.000,- had, wat zou je kopen?</li>
          <li>wat is je favoriete bezigheid?</li>
        </ul>
        <form action="pages/paniek.php" method="post">
          <input type="text" name="huisdier" value="hond">
          <input type="text" name="persoon" value="Henk">
          <input type="text" name="wonen" value="Nederland">
          <input type="text" name="vervelen" value="Netflix kijken">
          <input type="text" name="speelgoed" value="lego">
          <input type="text" name="docent" value="Jaap">
          <input type="text" name="kopen" value="computer">
          <input type="text" name="hobby" value="progameren">
          <input type="submit" id="send" href="page/paniek.php">
        </form>
      </div>
    </main>
    <footer>Footer</footer>
  </body>
</html>
