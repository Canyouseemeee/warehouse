<?php
    session_start();

    if(!isset($_SESSION['Mlogin']))
    {
      header('Location:login.php?error=Please login');
    }
?>
<?PHP
    include('connect_db.php');
    $position_name = $_POST['position_name'];
    $id = $_POST['position_id'];

    $sql = 'UPDATE tb_position
            SET position_name = "'.$position_name.'"
            WHERE position_id = "'.$id.'"
            ';
    $query = mysqli_query($connection,$sql);
    Header('Location:admin_position.php');
         
?>