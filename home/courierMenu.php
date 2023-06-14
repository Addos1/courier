
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разместить заказ</title>
    <style>
        body {
            background-image: url('../images/cur.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <div style="overflow-x:auto;">
            <table border="0px solid" style="margin: auto; font-weight:bold;border-spacing: 5px 15px;">
                <th colspan="4" style="text-align: center;background-color:#90EE90; width: 140px; height: 50px;">Заполните данные отправителя и получателя</th>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <hr>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <th colspan="2">ОТПРАВИТЕЛЬ</th>
                    <th colspan="2">ПОЛУЧАТЕЛЬ</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th colspan="2"></th>
                </tr>
                <tr>
                    <td>Имя:</td>
                    <td><input type="text" name="sname" placeholder="ФИО получателя" required></td>

                    <td>Имя:</td>
                    <td><input type="text" name="rname" placeholder="ФИО отправителя" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="semail" value="<?php echo $email; ?>" readonly></td>

                    <td>Email:</td>
                    <td><input type="text" name="remail" placeholder="Email получателя" required></td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td><input type="number" name="sphone" placeholder="номер телефона" required></td>

                    <td>Телефон:</td>
                    <td><input type="number" name="rphone" placeholder="номер телефона" required></td>
                </tr>
                <tr>
                    <td>Адрес:</td>
                    <td><input type="textfield" name="saddress" placeholder="адрес отправителя" required></td>

                    <td>Адрес:</td>
                    <td><input type="textfield" name="raddress" placeholder="адрес получателя" required></td>
                </tr>
                <tr>
                    <td colspan="4">✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️</td>
                </tr>
                <tr>
                    <td>Вес:</td>
                    <td><input type="number" name="wgt" placeholder="вес в кг" required></td>

                    <td>Номер оплаты:</td>
                    <td><input type="number" name="billno" placeholder="Введите номер транзакции" required></td>
                </tr>
                <tr>
                    <!-- <td>Date:</td><td><input type="date" name="date"></td> -->
                    <td>Дата:</td>
                    <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly /></td>
                    <td>Картина продукта:</td>
                    <td><input type="file" name="simg" ></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="submit" value="Разместить заказ" style="background-color: orange; border-radius: 15px; width: 140px; height: 50px;cursor:pointer;"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) { 

    include('../dbconnection.php');

    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $sphone = $_POST['sphone'];
    $rphone = $_POST['rphone'];
    $sadd = $_POST['saddress'];
    $radd = $_POST['raddress'];
    $wgt = $_POST['wgt'];
    $billn = $_POST['billno'];
    $originalDate = $_POST['date'];
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid');";
    $run = mysqli_query($dbcon, $qry);

    // $trackqry= "INSERT INTO `track` (`u_id`, `c_id`) VALUES ('$uid', 'LAST_INSERT_ID()')";
    //$runtrack = mysqli_query($dbcon, $trackqry);

    if ($run == true) {

    ?> <script>
            alert('Заказ успешно размещен :)');
            window.open('courierMenu.php', '_self');
        </script>
    <?php
    }
}

?>