<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //iemand vult wat in
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //opslaan in database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

<style type="text/css">

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }
    body{
        background-color: #d9d9d9;
    }
    #bar{
        background-color: black;
        height: 92px;
        width: 201vh;
    }
    #logo{
        font-family: sans-serif;
        font-size: 40px;
        text-align: center;
        color: #D9D9D9;
    }
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{
        margin-left: 80px;
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    #button:hover{
        cursor: pointer;
    }

    #box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        padding: 20px;
        background-color: white;
    }

</style>
<div id="bar"> <div id="logo">Bas Forum</div> </div>
<div id="box">

    <form method="post">
        <div style="font-family: sans-serif;font-size: 20px;margin: 10px;text-align: center; color: black;">Signup</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Signup"><br><br>

        <a style="font-family: sans-serif;margin: 82px;text-align: center; color: black;" href="login.php">Click to Login</a><br><br>
    </form>
</div>
</body>
</html>