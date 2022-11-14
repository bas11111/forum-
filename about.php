<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_ab = $_POST['user_ab'];

    if(!empty($user_ab) && !is_numeric($user_ab))
    {
        $id = $_SESSION['user_id'];
        //save to database
        $sql = "UPDATE users SET user_ab = '$user_ab' WHERE user_id = '$id'";

        mysqli_query($con, $sql);

        header("Location: account.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="box">

    <form method="post">
        <div style="font-family: sans-serif;font-size: 20px;margin: 10px;text-align: center; color: black;">Signup</div>

        <input id="text" type="text" name="user_ab"><br><br>

        <input id="button" type="submit" value="Save"><br><br>

        <a style="font-family: sans-serif;margin: 82px;text-align: center; color: black;" href="login.php">Click to Login</a><br><br>
    </form>
</div>
</body>
</html>
