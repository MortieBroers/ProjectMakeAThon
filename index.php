<?php
  include 'config.php';
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>DE SPEL</title>
</head>
  <body>
    <?php
      $cat = "SELECT * FROM gameserver";
      $antwoord = $DBH->query($cat);
      while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {

        print $row['score'];
      }
    ?>

  </body>
</html>
