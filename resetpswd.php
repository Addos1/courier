<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Conforming</title>
    <style>
        body
        {
        background-image:url('images/brr.png');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <h1 align='center' style="margin: 15px; color:green;font-weight: bold;font-family:'Times New Roman', Times, serif">СМЕНА ПАРОЛЯ</h1><hr/>
    <P align='center' style="font-weight: bold;color:yellow;font-family:'Times New Roman', Times, serif">Самая быстрая курьерская служба</P>
    <div><h5 ><a href="index.php" style="float: right; margin-right:40px; color:blue; margin-top:0px">Войти</a></h5></div>
        <div class="container" style="margin-top: 60px; width:50%;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #273c75;">Проверьте следующие детали</h2>
                    <p style="color:#e84118;">Чтобы сбросить пароль⮯⮯</p>
                    <form action="resetpswd.php" method="get">
                            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Эл. адрес" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Проверить" />  
                        </div>
                        <p style="color: #e84118;">Нет учетной записи?⮞➤ <a href="register.php">Зарегистрируйтесь здесь </a>.</p>
                        
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

<?php

require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];

    $qryy= "SELECT * FROM `login` WHERE `email`='$email'";
    $run= mysqli_query($dbcon,$qryy);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Упс! Электронная почта не соответствует..Повторите попытку или создайте новую");
            window.open('resetpswd.php','_self');
        </script>   <?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['u_id'];
        session_start();
        $_SESSION['gid']=$id;
        
        ?>  <script>
              
            window.open('reset.php','_self');
            </script>
        <?php
        

    }
}
    
?>