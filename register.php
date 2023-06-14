<?php
require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = $_POST['name'];
    $phn = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password==$confirm_password){

    $qry = "INSERT INTO `users` (`email`, `name`, `pnumber`) VALUES ('$email', '$fullname', '$phn')";
    $run = mysqli_query($dbcon,$qry);
    
    if($run==true){

        $psqry = "INSERT INTO `login` (`email`, `password`, `u_id`) VALUES ('$email', '$password',LAST_INSERT_ID() )";
        $psrun = mysqli_query($dbcon,$psqry);
        ?>  <script>
            alert('Регистрация прошла успешно:)'); 
            window.open('index.php','_self');
            </script>
        <?php
    }
    }else{
        ?>  <script>
            alert('Неверный пароль!!'); 
            </script>
        <?php
    }

}   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
        body
        {
        background-image:url('images/brr.png');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
    </head>
    <body><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color:green">Регистрация</h2>
                    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                    <!-- <?php echo $success; ?>
                    <?php echo $error; ?> -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label>ФИО</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Номер телефона</label>
                            <input type="number" name="ph" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Подтверждение пароля</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-danger" value="Зарегистрироваться">
                        </div>
                        <p>У вас уже есть аккаунт?<a href="index.php" style="color: red;">Войти здесь</a>.</p>
                    </form>
                </div>
            </div>
            <hr><p>Примечание. Если идентификатор электронной почты был зарегистрирован ранее, он не будет отвечать.</p>
            <p>В этом случае сбросьте пароль или зарегистрируйтесь с другим идентификатором электронной почты....</p>
        </div>    
    </body>
</html>