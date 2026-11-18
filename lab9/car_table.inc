<table>
    <caption>Car details</caption>
    <thead><tr><th scope="col">ID</th><th scope="col">Make</th><th scope="col">Model</th><th scope="col">Price ($)</th><th scope="col">Year</th></tr></thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo (int) $row['car_id']; ?></td>
            <td><?php echo htmlspecialchars($row['make'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($row['model'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo number_format((float) $row['price'], 2); ?></td>
            <td><?php echo (int) $row['yom']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
