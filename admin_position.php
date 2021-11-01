<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>หมวดหมู่สินค้า</title>
</head>
<body  style="background-color:#D96690">
    <div class="container p-3 mb-2 ">
        <div>
            <div class="col-md-12 mt-3">
                <h1 class="text-center">การจัดการข้อมูลตำแหน่ง</h1>
                <center><img src="users-removebg-preview.png" alt="position-removebg-preview" width="150" height="150"></center>
            </div>
            <div class="col-lg-12 ">
            <form action="add_position.php" method="POST" enctype="multipart/form-data">
                    <center><div class="col-lg-6 mt-4">
                              <!-- <label>ตำแหน่ง</label> -->
                              <input type="text" name="position" placeholder="โปรดใส่ ตำแหน่ง"  class="form-control" required >
                          </div>
                    </center>
                    <!-- <div class="col-lg-5">
                        <label>รายละเอียดตำแหน่ง</label>
                        <textarea class="form-control" aria-label="With textarea" name="categorydetails" placeholder="โปรดใส่ รายละเอียดหมวดหมู่สินค้า" required></textarea>
                    </div> -->
                    <div class="col-lg-12 text-center" style="margin-top: 20px;">
                        <button class="btn badge-success" type="submit">เพิ่มตำแหน่ง</button>
                        <button class="btn badge-info" type="reset">ล้างข้อมูล</button>
                        <a href="index.php" class="btn btn-primary">กลับ</a>
                    </div>
            </form>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 p-3 mb-2 text-center"  style="background-color:#F28DB2;">
          <h2>ตารางตำแหน่ง</h2>
          <table class="table  table-sm"  style="background-color:#F28DB2;">
            <tr>
              <th>#</th>
              <th>ตำแหน่ง</th>
              <!-- <th>รายละเอียดตำแหน่ง</th> -->
              <th>แก้ไข</th>
            </tr>
            <?PHP
              include('connect_db.php');
              $sql = "SELECT * FROM tb_position order by position_id ASC";
              $query = mysqli_query($connection,$sql);
              $i = 1;
              while($row = mysqli_fetch_array($query)){
               echo'<tr>
                <td>'.$i.'</td>
                <td>'.$row['position_name'].'</td>
                <td><a href="form_edit_position.php?position_id='.$row['position_id'].'" class="btn btn-warning">แก้ไข</a></td>
              </tr>';
              $i++;
              }
            ?>
          </table>
        </div>
      </div>
    </div>
</body>
</html>