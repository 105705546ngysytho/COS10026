<?php
require_once __DIR__ . '/settings.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    mysqli_set_charset($conn, 'utf8mb4');
} catch (mysqli_sql_exception $exception) {
    http_response_code(500);
    exit('Unable to connect to the database. Check settings.php and your MySQL server.');
}
