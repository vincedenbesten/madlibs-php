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
      <div>
        <ul>
          <li>Wat zou je graag willen kunnen?</li>
          <li>Met welke persoon kun je goed opschieten?</li>
          <li>Wat is je favoriete getal?</li>
          <li>Wat heb je altijd bij je als je op vakantie gaat?</li>
          <li>Wat is je beste persoonlijke eigenschap?</li>
          <li>Wat is je slechtste persoonlijke eigenschap?</li>
          <li>Wat is het ergste wat je kan overkomen?</li>
        </ul>
        <form action="onkunderesult.php" method="post">
          <input type="text" name="kunnen" value="tekenen">
          <input type="text" name="persoon" value="Henk">
          <input type="text" name="getal" value="11">
          <input type="text" name="vakantie" value="potlood">
          <input type="text" name="beste" value="creativiteit">
          <input type="text" name="slechtste" value="onhandigheid">
          <input type="text" name="overkomen" value="vervelen">
          <input type="submit" id="send" href="onkunderesult.php">
        </form>
      </div>
    </main>
    <footer>Footer</footer>
  </body>
</html>
