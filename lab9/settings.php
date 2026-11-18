<?php
// Connection defaults. Private local credentials override these values.
$host = "127.0.0.1";
$user = "root";
$pwd = "";
$sql_db = "exhibition_db";
if (is_file(__DIR__ . "/settings.local.php")) {
    require __DIR__ . "/settings.local.php";
}
