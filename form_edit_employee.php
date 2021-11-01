<!-- <?php
    // session_start();

    // if(!isset($_SESSION['Mlogin']))
    // {
    //   header('Location:login.php?error=Please login');
    // }
?> -->
<?PHP
     include('connect_db.php');
     $id = $_GET['id']; 
     $sql = "SELECT * FROM tb_employee WHERE emy_id = ".$id."";
     $query = mysqli_query($connection,$sql);
     $row = mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<body>
<div class="modal-body container p-3 mb-2  text-back"style="background-color:#F28DB2;">
      <form action="edit_employee.php" method="POST">
                    <h2 class="text-center">แก้ไขข้อมูลพนักงาน</h2>
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ - นามสกุล</label> -->
                        <input type="hidden" name="emy_id" class="form-control" id="fullname" value="<?PHP echo $row['emy_id'];?>" aria-describedby="emailHelp" required >
                      <!-- </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ - นามสกุล</label>
                        <input type="text" name="name" class="form-control" id="fullname" value="<?PHP echo $row['emy_name'];?>" aria-describedby="emailHelp" placeholder="โปรดใส่ ชื่อ - นามสกุล" required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">บัตรประชาชน</label>
                        <input type="text" name="card" class="form-control" id="card" value="<?PHP echo $row['emy_card'];?>" aria-describedby="emailHelp" placeholder="โปรดใส่ บัตรประชาชน" maxlength ="13" onkeypress="return onlyNumberKey(event)" pattern="[0-9]{13}" title="โปรดใส่ เลขบัตรประชาชนให้ถูกต้อง"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทร</label>
                        <input type="text" name="Tel" class="form-control" id="Tel" value="<?PHP echo $row['emy_tel'];?>" aria-describedby="emailHelp" placeholder="โปรดใส่ เบอร์โทรศัพท์" required  onkeypress="return onlyNumberKey(event)" pattern="[0-9]{10}" title="โปรดใส่ เบอร์โทรศัพท์ให้ถูกต้อง" maxlength="10">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ข้อมูลเงินเดือน</label>
                        <input type="number" name="salary" class="form-control" id="salary" value="<?PHP echo $row['emy_salary'];?>" aria-describedby="emailHelp" placeholder="โปรดใส่ เงินเดือน" min ="10000" max ="200000"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ที่อยู่</label>
                        <textarea class="form-control" aria-label="With textarea" name="address" id="address"  placeholder="โปรดใส่ ที่อยู่" required><?PHP echo $row['emy_address'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ตำแหน่ง</label>
                        <select name="position" id="position" class="form-control" require>
                          <?php 
                              include('connect_db.php');
                              $sql = "SELECT * FROM tb_position order by position_id ASC";
                              $sql2 = "SELECT * FROM tb_employee WHERE emy_id = ".$id."";
                              $query = mysqli_query($connection,$sql);
                              $query2 = mysqli_query($connection,$sql2);
                              $row2 = mysqli_fetch_array($query2);
                              while($row = mysqli_fetch_array($query)){?>
                                echo '
                                  <option value="<?php echo $row['position_name'];?>" <?php if ($row ['position_name'] == $row2 ['emy_position']){ echo 'selected'; }?>><?php echo $row['position_name'];?></option>
                                ';
                              <?php }?>                         
                        </select>
                      </div>
                      <div class="col-lg-12 text-center" style="margin-top: 20px;">
                        <button class="btn btn-info" type="edit">อัปเดต</button>
                        <button class="btn btn-success" type="reset">ค่าเริ่มต้น</button>
                        <a href="position.php" class="btn btn-primary">กลับ</a>
                      </div>
                  </form>
      </div>
</body>
</html>