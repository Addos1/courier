
<?php
    include('../dbconnection.php');
    $billno= $_REQUEST['bb'];

    $qry = "DELETE FROM `courier` WHERE `billno`='$billno'";
    $run = mysqli_query($dbcon,$qry);

    if($run==true){
    ?>  <script>
        alert('Заказ успешно удален :)');
        window.open('trackMenu.php','_self');
                
        </script>
    <?php
}
?>