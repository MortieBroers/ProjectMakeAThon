<?php
require_once 'config.php';

$DBH = connection();

function score($DBH){
$cat = "SELECT * FROM gameserver";
    $antwoord = $DBH->query($cat);
    echo   '<tr>
                <th>Naam</th>
                <th>Score</th>
            </tr>

            <tr>';
    while ($row = $antwoord->fetch(PDO::FETCH_ASSOC)) {
        echo '<td>';
        echo $row['naam'];
        echo '</br>';
        echo '</td>';
        echo '<td>';
        echo $row['score'];
        echo '</td>';
    }
    echo '</tr>';
}