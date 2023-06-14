
<?php
    include('../dbconnection.php');
    $em= $_GET['emm'];

    // $qrycr="DELETE FROM `courier` WHERE `semail`='$em'";
    // $runcr = mysqli_query($dbcon,$qrycr);
    // if($runcr==false){
    //     echo '';
    // }

    $qry = "DELETE FROM `users` WHERE `email`='$em'";
    $run = mysqli_query($dbcon,$qry);

    if($run==true){
    ?>  <script>
        alert('Пользователь удален успешно:)');
        window.open('deleteusers.php','_self');
        </script>
    <?php
}

?>