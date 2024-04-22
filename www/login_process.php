<?php
print_r($_POST);

if (
    !isset($_POST['email'])) {
        echo "Deze sleutel bestaat niet";
        exit;
    }

    if (
        !isset($_POST['password'])) {
            echo "Deze sleutel bestaat niet";
            exit;
        }

        if (
            (empty($_POST['email']))) {
                echo "Email is leeg";
                exit;
            }

            if (
                (empty($_POST['password']))) {
                    echo "Wachtwoord is leeg";
                    exit;
                }

                $email = $_POST['email'];
                $password = $_POST['password'];

                require 'database.php';

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $dbUser = mysqli_fetch_assoc($result);
            var_dump($dbUser);

            echo "Je bent ingelogd.. YIPPEEE!";
            exit;