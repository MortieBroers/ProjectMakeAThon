<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>DE GAME</title>
</head>
  <body>

  </body>
</html>

<?php
require_once 'config.php';

$cat = "SELECT Highscore FROM gamestatus ";

$highscore = $DBH->query($cat);
$name = $DBH->query($cat);

while ($row = $highscore->fetch(PDO::FETCH_ASSOC)) {

  print $highscore + $name;
}
?>