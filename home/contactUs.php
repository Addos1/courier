<!DOCTYPE html>
<html lang="ru>
<head>
    <meta charset="utf-8">
    <title>Свяжитесь с нами</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
include('header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Отправьте сообщение</h2>
                <p class="text-center">Ждем вашего ответа..</p>
                
                <form action="contactUs.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="email" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Продукт">
                    </div>
                    <div class="form-group">
                       
                        <input  class="form-control textarea" type="textarea" name="message" placeholder="Составьте сообщение..">
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Отправить" placeholder="Subject">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if (isset($_POST['send'])) {
    include('../dbconnection.php');

    $eml = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $qry = "INSERT INTO `contacts` (`email`, `subject`, `msg`) VALUES ('$eml', '$sub', '$msg')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Спасибо, мы рассмотрим вашу проблему :)');
            window.open('home.php', '_self');
        </script>
    <?php
    }
}
?>