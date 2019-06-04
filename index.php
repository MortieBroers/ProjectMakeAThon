<?php
include 'includes.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$cat = "SELECT Highscore FROM gamestatus ";
$antwoord = $DBH->query($cat);
while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {

  print 'Het antwoord is'+ $antwoord + 'Soo';

}
?>

  </body>
</html>
