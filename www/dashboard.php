<?php

require "database.php";

$sql = "SELECT COUNT(*) AS aantal_tools FROM tools ";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);

echo "" . $data['aantal_tools'] . " tools";

$sql = "SELECT AVG(tool_price) AS price FROM tools";
$result= mysqli_query($conn, $sql);
$average_price = mysqli_fetch_assoc($result);

$sql = "SELECT AVG(tool_price), tool_category AS price FROM tools GROUP BY tool_category";
$result= mysqli_query($conn, $sql);
$average_price = mysqli_fetch_assoc($result);
$sql = "SELECT font,backgroundCOLOR FROM users JOIN user_settings ON user_settings.user_id = users.id";

$sql ="SELECT MAX(tool_price FROM tools";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Data van de databse</h1>
        <p>
            <span>Aantal gereedschap:</span> <?php echo $data['aantal']; ?>

        </p>

    </section>
</body>

</html>