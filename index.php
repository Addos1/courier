<?php

require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
?>
        <script>
            alert("Ой! пожалуйста, введите имя пользователя и пароль еще раз..");
            window.open('index.php', '_self');
        </script> <?php
                } else {
                    $data = mysqli_fetch_assoc($run);
                    $id = $data['u_id'];   
                    $email = $data['email'];
                    $_SESSION['uid'] = $id;   
                    $_SESSION['emm'] = $email;
                    ?>
        <script>
            alert("Добро пожаловать!");
            window.open('home/home.php', '_self');
        
        </script> <?php

                }
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/10.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <h1 align='center' style="margin: 15px; color:seagreen;font-weight: bold;font-family:'Times New Roman', Times, serif">КУРЬЕРСКАЯ СЛУЖБА ZHIBER</h1>
    <hr />
    <P align='center' style="font-weight: bold;color:orange;font-family:'Times New Roman', Times, serif">Самая быстрая курьерская служба</P>
    <div>
        <h5><a href="admin/adminlogin.php" style="float: right; margin-right:40px; color:blue; margin-top:0px">Админ</a></h5>
    </div>
    <div class="container" style="margin-top: 60px; width:50%;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #273c75;">Login</h2>
                <p style="color:#e84118;">Пожалуйста, заполните ⮯⮯</p>
                <!-- <?php echo $error; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label>Почтовый адрес</label>
                        <input type="email" name="email" class="form-control" placeholder="Введите имя пользователя/электронную почту" required />
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="password" name="password" class="form-control" placeholder="Введите свой пароль" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Войти" />
                        <a href="resetpswd.php" class="btn btn-danger">Смена пароля</a>
                       
                    </div>
                    <p style="color: #e84118;">У вас нет аккаунта?⮞➤ <a href="register.php">Зарегистрируйтесь здесь</a>.</p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>