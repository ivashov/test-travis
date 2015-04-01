<?php

$dbconn = pg_connect("host=localhost dbname=tdatabase user=postgres");

$res = pg_query($dbconn, "SELECT users.name FROM users;");
$row = pg_fetch_row($res);

if ($row) {
    echo $row[0];
} else {
    echo "Test";
}

pg_exec("INSERT INTO users (name) VALUES ('qwer');");
