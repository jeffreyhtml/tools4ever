<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Er is geen POST request";
    exit;
    die;
}


if (!isset($_POST['tool_name'])) {
    var_dump($_POST);
    echo "Naam is belangerijk he!";
    exit;
}
if (!isset($_POST['tool_brand'])) {
    var_dump($_POST);
    echo "Merk is belangerijk he!";
    exit;
}
if (!isset($_POST['tool_category'])) {
    var_dump($_POST);
    echo "Categorie is belangerijk he!";
    exit;
}
if (!isset($_POST['tool_price'])) {
    var_dump($_POST);
    echo "Prijs is belangerijk he!";
    exit;
}

if (!isset($_POST['tool_name'])  ||  !isset($_POST['tool_price']) || !isset($_POST['tool_category'])|| !isset($_POST['tool_brand'])){
    echo "de tool naam bestaat niet";
    exit;
}

$tool_name = $_POST['tool_name'];

$tool_name = $_POST['tool_brand'];

$tool_name = $_POST['tool_category'];

$tool_name = $_POST['tool_price'];


require 'database.php'; //$conn
sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand)";
VALUES ('tool_name, tool_category, tool_price, tool_brand');
?>