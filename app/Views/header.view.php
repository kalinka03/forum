<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Forum</title>
</head>
<body>
<header>
    <form  style="float:right " method="get" action="/search?t=">
        <input type="text" name="t" placeholder="Что искать" required>
        <input type="submit" name="enter" value="Поиск" >
    </form>
    <ul>
        <li><a href="/">Forum (Main)</a></li>
         <li><a href="/registration">registration</a></li>
        <li><a href="/login">login</a></li>
         <li><a href="/logout">logout</a></li>
    </ul>
</header>
    <?php
        if(isset($_SESSION['flash_msg'])){
            echo $_SESSION['flash_msg'];
            unset($_SESSION['flash_msg']);
        }
        ?>