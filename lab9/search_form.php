<?php
$pageTitle = 'Search cars';
include __DIR__ . '/header.inc';
?>
<h2>Search by model</h2>
<form action="search_result.php" method="get">
    <label for="model">Car model</label>
    <input type="search" id="model" name="model" maxlength="100" placeholder="e.g. Corolla" required>
    <button type="submit">Search</button>
</form>
<?php include __DIR__ . '/footer.inc'; ?>
