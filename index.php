<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <?php
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

    //     echo '<h1>hello world</h1>';
//     $name = 'alice';
//     class phone
//     {
//         var $model;
//         public function __construct($number)
//         {
//             global $model;
//             $model = $number;
//             echo "this is $model" . '<br/>';
//         }
    
    //         function phonemodel($number)
//         {
//             global $model;
//             $model = $number;
//             echo "this is $model" . '<br/>';
//         }
//     }
//     $apple = new phone("apple 15 pro max");
//     $apple->phonemodel("apple 13 pro max");
    
    //     $arr = array(123, "hello", 5);
    
    //     for ($i = 0; $i < count($arr); $i++) {
//         echo " " . $arr[$i] . "   ";
//     }
//     echo "hello world" . '<br/>' . 'bye';
//     $st = "my name is araf";
//     $len = strlen($st);
//     echo "the string length is " . strlen($st);
//    <h1>hello</h1>
    global $email, $password;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $password = $_POST['pass'];
        // echo "this is email - " . $email . "'</br> and this is password " . $password;
    }
    $insertValue = "INSERT INTO `mytable` (`name`, `age`, `gender`, `email`) VALUES ('$password', '22', 'male', '$email')";
    $result = mysqli_query($conn, $insertValue);
    if ($result) {
        echo "data inserted succesfully ";
    } else
        echo "data not inserted succesfully ";
    $conn->close();
    ?>

    <div class="container">
        <form action="/learnPhp/index.php" method="post">
            <div class="box">
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="write your email" required>
            </div>
            <div class="box">
                <label for="pass">Password</label>
                <input type="password" name="pass" placeholder="write your password" required>
            </div>


            <button type="submit">submit</button>
        </form>
    </div>
</body>

</html>