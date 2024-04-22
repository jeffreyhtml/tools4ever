<?php
 
 
var_dump($_POST);
 
if (
    !isset($_POST['firstname']) ||
    !isset($_POST['lastname']) ||
    !isset($_POST['email']) ||
    !isset($_POST['password']) ||
    !isset($_POST['address']) ||
    !isset($_POST['city']) ||
    !isset($_POST['status']) ||
    !isset($_POST['role'])
) {
    echo "De vereiste sleutels zijn niet aanwezig";
    exit;
}
 
if (
    empty($_POST['firstname']) ||
    empty($_POST['lastname']) ||
    empty($_POST['email']) ||
    empty($_POST['password']) ||
    empty($_POST['address']) ||
    empty($_POST['city']) ||
    empty($_POST['status']) ||
    empty($_POST['role'])
) {
    echo "Een van de velden is leeg";
    exit;
}
 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$status = $_POST['status'];
$role = $_POST['role'];
 
require 'database.php';
 
$sql = "INSERT INTO users (firstname, lastname, email, password, address, city, role, is_active)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$address', '$city', '$role', '$status')";
 
mysqli_query($conn, $sql);
 
// DRY: DONT REPEAT YOURSELF