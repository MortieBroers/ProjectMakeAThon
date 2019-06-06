<?php

function connection()
{
 $host = "remotemysql.com";
 $dbname = "hNV884Qbj8";
 $user = "hNV884Qbj8";
 $password = "OlkJxkax8O";

 return new PDO('mysql:host=' .$host. ';dbname=' .$dbname, $user, $password);
}
