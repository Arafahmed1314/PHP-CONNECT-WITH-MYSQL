<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "araf";
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn)
        echo "Connection established" . '<br /><br />';
    $sql = "select * from mytable";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo $num . "<br /><br />";
    // if ($num > 0) {
    //     $row = mysqli_fetch_array($result);
    //     echo var_dump($row);
    //     $row = mysqli_fetch_array($result);
    //     echo var_dump($row);
    // }
    while ($row = mysqli_fetch_array($result)) {
        echo $row['name'];
    }


    ?>
</body>

</html>