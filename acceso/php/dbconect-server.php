<?php
$mysqli = new mysqli("localhost", "cyfeng_pipe", "C@F-engineer2016", "cyfeng_cyf");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
?> 