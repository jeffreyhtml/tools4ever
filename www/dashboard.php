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
<?php

require "database.php";

$sql = "SELECT COUNT(*) AS aantal_tools FROM tools ";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);

echo "" . $data['aantal_tools'] . " tools";
?>