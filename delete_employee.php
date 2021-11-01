<?PHP
     include('connect_db.php');
     $id = $_GET['id'];
     echo $sql = 'DELETE FROM tb_employee WHERE emy_id = "'.$id.'"';
     $query = mysqli_query($connection,$sql);

     Header('Location:position.php');
?>