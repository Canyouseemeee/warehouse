<?PHP
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'position';

    $connection = mysqli_connect($localhost,$username,$password,$database);

    if(!$connection){
        echo'Connection falied';
        exit();
    }
    
?>