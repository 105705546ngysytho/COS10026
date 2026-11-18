<?php
require_once __DIR__ . '/connection.php';
$query = "SELECT car_id, make, model, price, yom FROM cars ORDER BY car_id";
$result = mysqli_query($conn, $query);
$pageTitle = 'All cars';
include __DIR__ . '/header.inc';
?>
<h2>All cars</h2>
<?php
if (mysqli_num_rows($result) > 0) {
    include __DIR__ . '/car_table.inc';
} else {
    echo '<p>There are no cars to display.</p>';
}
mysqli_free_result($result);
mysqli_close($conn);
include __DIR__ . '/footer.inc';
