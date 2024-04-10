<?php
echo "Welkom op de databse van tools";

require 'database.php';
$sql = "SELECT * FROM tools";
$tools = mysqli_query($conn, $sql);
$tools = mysqli_fetch_all($tools, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
body>
<table>
    <thead>
        <tr>
            <th>naam</th>
            <th>categorie</th>
            <th>prijs</th>
            <th>&nbsp;</th>//nonbreakingspace
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tools as $toolid) : ?>
            <tr>
                <td><?php echo $toolid['tool_name'] ?></td>
                <td><?php echo $toolid['tool_category'] ?></td>
                <td><?php echo $toolid['tool_price'] ?></td>
                <a href="detail.php?id=<?php echo $tool['tool_id'] ?>">details</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>

</html>