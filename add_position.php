<?PHP
    include('connect_db.php');
    $position_name =  $_POST['position'];
 
    $sql = 'INSERT INTO tb_position (position_name)
    VALUES ("'.$position_name.'");';
    $query = mysqli_query($connection,$sql);

    Header('Location:admin_position.php');
    
?>