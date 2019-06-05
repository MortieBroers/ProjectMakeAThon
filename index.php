<?php
include 'config.php';
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>DE SPEL</title>
</head>
  <body>
    <button id="openButton" onclick="openInfo()">Open Info<button>

    <button id="closeButton" onclick="closeInfo()">Close Info</button>

    <div id="info">
      <h4>Hoe Werkt Dit Spel?</h4>
      <p>Inhoud</p>

      <h4>Geef De Spelers Een Boost.</h4>
      <p>Boost</p>

      <h4>Spawn Vijanden In Het Spel.</h4>
      <p>Enemy</p>

      <h4>Verblind De Spelers.</h4>
      <p>Vignette</p>
    </div>

    <form>
      <input type="submit" name="Boost">
      <input type="submit" name="Enemy">
      <input type="submit" name="Blindness">
    </form>

    <script>
      $(document).ready(function() {
        $('#info').hide();
      });

      function openInfo() {
        $('#info').hide();
        $('#openButton').hide();
        $('#closeButton').show();
      }

      function closeInfo() {
        $('#info').show();
        $('#openButton').show();
        $('#closeButton').hide();
      }
    </script>

    <?php
    $cat = "SELECT * FROM gameserver";
    $antwoord = $DBH->query($cat);
    while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {
      print $row['score'];
    }
    ?>

  </body>

</html>
