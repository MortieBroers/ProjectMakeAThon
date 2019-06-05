<?php
function connection()
{
    $host =         "remotemysql.com";
    $username =     "hNV884Qbj8";
    $password  =    "OlkJxkax8O";
    $dbname =       "hNV884Qbj8";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    return new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password", $options);
}
