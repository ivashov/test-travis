<?php

$dbconn = pg_connect("host=localhost dbname=tdatabase user=postgres");

$res = pg_query($dbconn, "SELECT users.name FROM users;");
$row = pg_fetch_row($res);

if ($row) {
    $js = $row[0];
    $arr = json_decode($js);
    echo $arr["val"];
} else {
    echo "Test";
}

$arr = array("val" => "qwer");
$js = json_encode($arr);
$jse = pg_escape_string($dbconn, $js);

pg_exec("INSERT INTO users (name) VALUES ('$jse');");
