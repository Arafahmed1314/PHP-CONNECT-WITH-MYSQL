<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Post";
    $_username = $_POST['username'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    // echo "this is email - " . $email . "'</br> and this is password " . $password;

    $server = "bphrafsghx6dtdrvclz2-mysql.services.clever-cloud.com";
    $username = "urkdjeivoglrumya";
    $password = "bWPRoCH3QAwGZRgE81dH";
    $database = "bphrafsghx6dtdrvclz2";
    // connection with database
    $conn = new mysqli($server, $username, $password, $database);
    if (!$conn) {
        echo "there is a problem connecting to database";
    } else
        echo "connection successful";


    $insertValue = "INSERT INTO `araf` (`username`, `email`, `password`) VALUES ('$_username', '$_email', '$_password')";
    $result = mysqli_query($conn, $insertValue);
    if ($result) {
        echo '</br>' . "data inserted succesfully ";
    } else
        echo "data not inserted succesfully ";
    $conn->close();
}
?>