<?php
require_once __DIR__ . '/connection.php';
$pageTitle = 'Search results';
include __DIR__ . '/header.inc';
?>
<h2>Search results</h2>
<?php
$model = isset($_GET['model']) && is_string($_GET['model']) ? trim($_GET['model']) : '';
if ($model === '') {
    echo '<p>Please enter a model to search.</p>';
} else {
    // Bind input separately from SQL to prevent SQL injection.
    // Escape LIKE wildcards so user-entered % and _ are literal characters.
    $pattern = '%' . strtr($model, ['!' => '!!', '%' => '!%', '_' => '!_']) . '%';
    $sql = "SELECT car_id, make, model, price, yom FROM cars WHERE model LIKE ? ESCAPE '!' ORDER BY car_id";
    $statement = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($statement, 's', $pattern);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    echo '<p>Model: ' . htmlspecialchars($model, ENT_QUOTES, 'UTF-8') . '</p>';
    if (mysqli_num_rows($result) > 0) {
        include __DIR__ . '/car_table.inc';
    } else {
        echo '<p>No matching cars found.</p>';
    }
    mysqli_free_result($result);
    mysqli_stmt_close($statement);
}
mysqli_close($conn);
?>
<p><a href="search_form.php">Search again</a></p>
<?php include __DIR__ . '/footer.inc'; ?>
