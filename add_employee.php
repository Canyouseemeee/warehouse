<?PHP
    include('connect_db.php');
    $name =  $_POST['name'];
    $card = $_POST['card'];
    $Tel = $_POST['Tel'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $position = $_POST['position'];

    $sql = 'INSERT INTO tb_employee (emy_name,emy_card,emy_tel,emy_salary,emy_address,emy_position)
    VALUES ("'.$name.'","'.$card.'","'.$Tel.'","'.$salary.'","'.$address.'","'.$position.'");';
    $query = mysqli_query($connection,$sql);

    Header('Location:position.php');
    
?>