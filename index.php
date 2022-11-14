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
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }
    body {
        background-color: #d9d9d9;
    }
    #home{
        font-family: sans-serif;
        font-size: 25px;
        text-align: center;
        color: #d9d9d9;
        background-color: black;
        width: 105px;
        float: left;
        text-decoration: none;
    }
    #acc{
        font-family: sans-serif;
        font-size: 25px;
        text-align: center;
        color: black;
        width: 105px;
        float: left;
        text-decoration: none;
    }
</style>
