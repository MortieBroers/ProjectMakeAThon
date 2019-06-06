<?php
function ShowScores()
{
    require_once "config.php";
    $con = connection();
    $select = $con->prepare("SELECT * FROM gameserver AS naam");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    echo '<ul>';
    while ($row = $select->fetch()) {

        echo '<li>';
        echo '<p>' . $row['naam'] . '<p>';
        echo '<br/>';
        echo '<p>' . $row['score'] . '<p>';
        echo '</li>';
    }
    echo '</ul>';
}
