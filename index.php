<?php
require_once 'function.php';
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
  <link rel="stylesheet" type="text/css" href="style.css" />
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
    <h6>Hoe Werkt Deze Site?</h4>
      <p>
        Op deze site kun je bepaalde gebeurtenissen besturen die in het spel gebeuren.<\br>
          De spelers lijden onder die gebeurtenissen.
      </p>

      <h6>Geef De Spelers Een Boost.</h4>
        <p>
          De spelers krijgen een snelheidsboost die 5 seconden lang duurt.<\br>
            <\br>
              (dit heeft een cooldown van 20 seconden)
        </p>

        <h6>Spawn Vijanden In Het Spel.</h4>
          <p>
            De spelers worden verhinderd door tegenliggers. Als de speler tegen de tegenligger crasht, verliest de speler.<\br>
              <\br>
                (dit heeft een cooldown van 20 seconden)
          </p>

          <h6>Verblind De Spelers.</h4>
            <p>
              De spelers krijgen een verblindend effect op hun beeld.<\br>
                <\br>
                  (dit heeft een cooldown van 20 seconden)
            </p>
  </div>

  <script src="script.js"></script>

  <?php
  score($DBH);
  ?>

</body>

</html>