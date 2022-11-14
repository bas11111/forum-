<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php require "header.php"?>
<div id="hoac">
    <a id="home" href="index.php">Home</a>
    <a id="acc" href="account.php">Account</a>
</div>
<div id="account">
    <div id="UN"><?php echo $user_data ['user_name']; ?></div>
    <div id="UB"><?php echo $user_data ['user_ab']; ?>
        <a id="wb" href="about.php">Werk bij</a>
    </div>
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
        color: #d9d9d9;
        background-color: black;
        width: 105px;
        float: left;
        text-decoration: none;
    }
    #account{
        width: 300px;
        height: 500px;
        margin-left: 160vh;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: white;
    }
    #UN{
        font-size: 40px;
        font-family: sans-serif;
        text-align: center;
        border-bottom: solid 2px black;
    }
    #UB{
        height: 350px;
        width: 300px;
    }
    #wb{
        text-decoration: none;
        color: white;
        background-color: black;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 90%;
    }
</style>
