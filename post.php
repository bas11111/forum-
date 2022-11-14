<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $thread = $_POST['thread'];

    if(!empty($thread) && !is_numeric($thread))
    {
        $id = $_SESSION['user_id'];
        //save to database
        $query = "insert into threads (thread) values ('$thread')";

        mysqli_query($con, $query);

        header("Location: account.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}

?>

<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
<?php require "header.php"?>
    <div id="hoac">
        <a id="home" href="index.php">Home</a>
        <a id="acc" href="account.php">Account</a>
    </div>
<div id="box">

    <form method="post">
        <input id="text" type="text" name="thread"><br><br>

        <input id="button" type="submit" value="Save"><br><br>
    </form>
</div>
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }
    body{
        background-color: #d9d9d9;
    }
    #home{
        font-family: sans-serif;
        font-size: 25px;
        text-align: center;
        color: black;
        background-color: #d9d9d9;
        width: 105px;
        float: left;
        text-decoration: none;
    }
    #acc{
        font-family: sans-serif;
        font-size: 25px;
        text-align: center;
        color: black;
        background-color: #d9d9d9;
        width: 105px;
        float: left;
        text-decoration: none;
    }
    #text{
        background-color: white;
        width: 1000px;
        height: 600px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
    }
    #button{
        position: absolute;
        left: 50%;
        top: 90%;
        transform: translate(-50%, -50%);
        padding: 10px;
        width: 100px;
    }
</style>