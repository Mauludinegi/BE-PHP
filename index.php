<?php
    session_start();
    include("config.php");
    if(!$_SESSION['id']) {
        header("Location: login.php");
    }
    $idMember = $_SESSION['id'];
    $sql = "select id from member where id = $idMember";
    $result = mysqli_query($mysqli, $sql);
    if($result->num_rows == 0 ){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello world

    <a href="logout.php">Logout</a>
</body>
</html>