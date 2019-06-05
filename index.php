<?php
include 'config.php';
?>
<html lang="en" dir="ltr">

<head>
  <title>DE GAME</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
  <header>
    <div class="left-header">
      <div class="wrapper-left-header">

      </div>
    </div>
    <div class="middle-header">
      <div class="wrapper-middle-header">

      </div>
    </div>
    <div class="right-header">
      <div class="wrapper-right-header">

      </div>
    </div>
  </header>
  <button id="openButton" onclick="openInfo()">Open Info</button>

  <button id="closeButton" onclick="closeInfo()">Close Info</button>

  <div id="info">
    <h6>Hoe Werkt Dit Spel?</h4>
      <p>
        Info
      </p>

    <h6>Geef De Spelers Een Boost.</h4>
      <p>
        Boost
      </p>

    <h6>Spawn Vijanden In Het Spel.</h4>
      <p>
        Enemy
      </p>

    <h6>Verblind De Spelers.</h4>
      <p>
        Vignette
      </p>
  </div>

  <form type="$_POST">
    <input type="submit" name="Boost" value="Boost Speler">
    <input type="submit" name="Enemy" value="Spawn Enemy">
    <input type="submit" name="Blindness" value="Verblind Speler">
  </form>

  <script src="script.js"></script>

  <?php
  $cat = "SELECT * FROM gameserver";
  $antwoord = $DBH->query($cat);
  while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {
    print $row['score'];
  }
  ?>

</body>

</html>