<?php
require_once 'config.php';

$DBH = connection();

function score($DBH){
$cat = "SELECT * FROM gameserver";
    $antwoord = $DBH->query($cat);
    echo '<ul>';
    while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>';
        echo $row['naam'];
        echo $row['score'];
        echo '</li>';
    }
    echo '</ul>';
}