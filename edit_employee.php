
<?PHP
    include('connect_db.php');
    $id = $_POST['emy_id']; 
    $name =  $_POST['name'];
    $card = $_POST['card'];
    $Tel = $_POST['Tel'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    // echo $position;

    $sql = 'UPDATE tb_employee
            SET emy_name = "'.$name.'",
            emy_card = "'.$card.'",
            emy_tel = "'.$Tel.'",
            emy_salary = "'.$salary.'",
            emy_address = "'.$address.'",
            emy_position = "'.$position.'"
            WHERE emy_id = "'.$id.'"
            ';
    $query = mysqli_query($connection,$sql);
    
    Header('Location:position.php');
         
?>