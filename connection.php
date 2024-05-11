<?php
echo 'wellcome to my php connection ';
// way to connect to a mysql databbase
// 1. mysqli extention
// 2. pdo -php data object
//conecting to the database
// 1. Initialize the variable we need
$server = "localhost";
$username = "root";
$password = "";
$database = "araf";
// connection with database
$conn = new mysqli($server, $username, $password, $database);
if (!$conn) {
    echo "there is a problem connecting to database";
} else
    echo "connection successful";
// now create a database with name  araf
// $createDatabase = "create database araf";
// $result = mysqli_query($conn, $createDatabase);
// if ($result) {
//     echo "database created";
// } else
//     echo "database not created";

// \create table
// $createtable = "CREATE TABLE `yourtable` (`name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , `email` VARCHAR(20) NOT NULL )";

// how to insert data
$insertValue = "INSERT INTO `mytable` (`name`, `age`, `gender`, `email`) VALUES ('araf', '22', 'male', 'araf1@gmail.com')";
$result = mysqli_query($conn, $insertValue);
if ($result) {
    echo "data inserted succesfully ";
} else
    echo "data not inserted succesfully ";

?>