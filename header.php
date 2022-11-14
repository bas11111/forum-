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
<div id="bar">
    <div id="hello">Hello, <?php echo $user_data['user_name']; ?></div>
    <a id="post" href="post.php">Maak een post</a>
    <a id="logu" href="logout.php">Logout</a>
</div>
</body>
</html>

<style>
    #bar{
        background-color: black;
        height: 92px;
        width: 201vh;
    }
    #hello{
        font-family: sans-serif;
        font-size: 40px;
        color: #d9d9d9;
        position: absolute;
        margin-top: 25px;
    }
    #post{
        position: absolute;
        margin-left: 186vh;
        color: #d9d9d9;
        font-size: 20px;
        font-family: sans-serif;
        text-decoration: none;
    }
    #logu{
        position: absolute;
        margin-top: 67px;
        margin-left: 193vh;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 20px;
        color: #d9d9d9;
    }
</style>
