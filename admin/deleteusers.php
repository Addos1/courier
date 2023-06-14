<!-- when admin click delete user link, it displays all users with delete option -->
<?php
    session_start();
    if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('head.php');
?>

<div class="admintitle">
    <div>
    <h5 ><a href="dashboard.php" style="float: left; margin-left:20px; color:aliceblue;">Вернуться к панели</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">Выйти</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Пользователи</h1>
</div>
<div style="overflow-x:auto;">
<table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-collapse: collapse;">
    <tr style="background-color: indigo;">
        <th>No.</th>
        <th>ФИО</th>
        <th>Email</th>
        <th>Действие</th>
    </tr>
    <?php

        include('../dbconnection.php');

        $qry= "SELECT * FROM `users`"; //AND `name` LIKE '%name%'
        $run= mysqli_query($dbcon,$qry);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='6'>Нет данных в базе данных</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
            ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a href="usersdeleted.php?emm=<?php echo $data['email']; ?>">Удалить пользователя</a></td>
            </tr>
            <?php
            }
        }


    
    ?>

</table>
</div>