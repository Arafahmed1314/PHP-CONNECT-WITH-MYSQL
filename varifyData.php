<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "araf";
$conn = new mysqli($server, $username, $password, $database);
$sql = "select * from yourtable";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

echo "hello";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_password = $_POST['password'];
    $_email = $_POST['email'];
    $_username = $_POST['username'];

    // echo "hell0o";
    global $age;
    $c = 0;
    if ($num > 0) {
        while ($row = $result->fetch_assoc()) {
            $c++;
            $emails = $row["email"];
            if ($c == 1)
                break;
        }
    }
    // echo $age;
    if ($emails == $_email) {
        echo "DONE man";
    } else
        echo "NOT DONE";
    // echo $_password . $_username . $_email;

}

// echo $num;

?>