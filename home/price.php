<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>






<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
     <style>
        body {
            background-image: url('../images/cur2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
</head>
<body>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: #90EE90;font-size:30px">
    <th>Вес в кг</th><th>Цена(тг)</th>
    </tr>
    <tr>
    <td>0-1</td><td>1200</td>
    </tr>
    <tr>
    <td>1-2</td><td>2000</td>
    </tr>
    <tr>
    <td>2-4</td><td>2500</td>
    </tr>
    <tr>
    <td>4-5</td><td>3000</td>
    </tr>
    <tr>
    <td>5-7</td><td>4000</td>
    </tr>
    <tr>
    <td>7-и выше</td><td>5000</td>
    </tr>
    </table>
    <h3 align="center" style="margin-top:20px;"> В соответствии с весом вашей посылки оплатите сумму на:</h3>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>Kaspi bank: 8(777)000-00-00</li>
    <li>GPay: 6362786223</li>
   
    </ol>
    </div>
</body>
</html>