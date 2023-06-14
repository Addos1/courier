<!DOCTYPE html><html lang="ru" data-reactroot=""><head><meta charSet="utf-8"/>
<title>Панель навигации с изображением логотипа</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .bs-example{
        margin: 0;
    }
</style>
</head>
<body>
<div class="bs-example" style="font-weight: bold;font-family:'Times New Roman', Times, serif">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="home.php" class="navbar-brand">
            <img src="../images/fcmw.png" height="80" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active">Главная страница</a>
                <a href="price.php" class="nav-item nav-link active">Цена</a>
                <a href="courierMenu.php" class="nav-item nav-link">Сделать заказ</a>
                <a href="trackMenu.php" class="nav-item nav-link">В пути</a>
                
                <a href="profile.php" class="nav-item nav-link">Профиль</a>
                <a href="contactUS.php" class="nav-item nav-link">Свяжитесь с нами</a>
                <!-- mailto:adeledosma@gmail.com -->
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../admin/logout.php" class="nav-item nav-link">Админ</a>
                <a href="../logout.php" class="nav-item nav-link">Выйти</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
<?php include('footer.php'); ?>

  