<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разместить заказ</title>
    <style>
        body {
            background-image: url('../images/cur1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate= date('Y-m-d');

    if($stdate==$tddate){
        ?>
        <h1 style="margin: 100px;background-color:#90EE90;text-align:center">Статус >> В пути...</h1>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:orange;height:60px;width:130px;border-radius:15px;cursor:pointer">Назад</button>
        </div>
         <?php 
    }
    else{
        ?>
        <h1 style="margin: 100px;background-color:#90EE90;text-align:center">Статус >> Посылки доставлены..<br /><p>Хорошего дня</p></h1>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:orange;height:60px;width:130px;border-radius:15px;cursor:pointer">Назад</button>
        </div>
        <?php
    }
?>


