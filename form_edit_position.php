<!-- <?php
    // session_start();

    // if(!isset($_SESSION['Mlogin']))
    // {
    //   header('Location:login.php?error=Please login');
    // }
?> -->
<?PHP
     include('connect_db.php');
     $id = $_GET['position_id']; 
     $sql = "SELECT * FROM tb_position WHERE position_id = ".$id."";
     $query = mysqli_query($connection,$sql);
     $row = mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<body style="background-color:#D96690">
    <div class="container p-3 mb-2  " style="background-color:#D96690">
      <div>
        <div class="col-lg-12 text-center">
          <h1>แก้ไขข้อมูลการจัดการตำแหน่ง</h1>
        </div>
        <div>
            <div class="col-lg-12 ">
            <form action="edit_position.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="hidden" name="position_id" id="" placeholder="Positionid" value="<?PHP echo $row['position_id'];?>"  class="form-control" readonly> 
                    </div>
                    <div class="col-lg-6">
                        <label>ตำแหน่ง</label>
                        <input type="text" name="position_name" value="<?PHP echo $row['position_name'];?>" class="form-control" required >
                    </div>
                    <div class="col-lg-12 text-center" style="margin-top: 20px;">
                        <button class="btn btn-info" type="edit">อัปเดต</button>
                        <button class="btn btn-success" type="reset">ค่าเริ่มต้น</button>
                        <a href="admin_position.php" class="btn btn-primary">กลับ</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
</body>
</html>