<?php

function conection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "gestorimagenes";
    $puerto = 3306;

    $mysqli = new mysqli($host, $user, $pass, $db, $puerto);
    return $mysqli;
}

?>