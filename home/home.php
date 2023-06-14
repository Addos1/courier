<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        body
        {
        background-image:url('../images/home1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>Это система управления курьерской службой</h2>
        <h4>Самая быстрая курьерская служба Казахстана</h4><br><br>
        <h3>СРС проект</h3>
        <h6>Досмаганбетова Адель</h6>
    </div>
</body>
</html>