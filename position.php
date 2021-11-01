<!-- <?php
    // session_start();

    // if(!isset($_SESSION['Mlogin']))
    // {
    //   header('Location:login.php?error=Please login');
    // }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>การจัดการพนักงาน</title>
</head>
<style>
  .t1{
    font-family: 'Kanit', sans-serif;
    font-size: 25px;
    font-weight: bold;
  }
</style>
<body class="text-black " style="background-color:#D96690" >
    <div class="container p-3 mb-2  text-black mt-5" >
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h1 class="text-center t1">การจัดการข้อมูลพนักงาน</h1>
                <center><img src="position-removebg-preview.png" alt="position-removebg-preview" width="150" height="150"></center>
                <a href="" data-toggle="modal" data-target="#exampleModalCenter"  class="btn btn-primary my-3">เพิ่มข้อมูล</a>
                <a href="index.php" class="btn btn-success">กลับ</a>
                <div class="card"  style="background-color:#F28DB2;">
                <table class="table  table-sm text-black" id="table1" >
                <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อ - นามสกุล</th>
                    <th scope="col">บัตรประชาชน</th>
                    <th scope="col">เบอร์โทร</th>
                    <th scope="col">ข้อมูลเงินเดือน</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">ตำแหน่ง</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                    
                </tr>
                </thead>
                <tbody>
                <?PHP
                    include('connect_db.php');
                    $sql = "SELECT * FROM tb_employee order by emy_id ASC";
                    $query = mysqli_query($connection,$sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                <tr>
                    <td><?PHP echo $i;?></td>
                    <td><?PHP echo $row['emy_name'];?></td>
                    <td><?PHP echo $row['emy_card'];?></td>
                    <td><?PHP echo $row['emy_tel'];?></td>
                    <td><?PHP echo $row['emy_salary'];?></td>
                    <td><?PHP echo $row['emy_address'];?></td>
                    <td><?PHP echo $row['emy_position'];?></td>
                   
                    <td><a href="form_edit_employee.php?id=<?PHP echo $row['emy_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $i;  ?>">
                    ลบ
                    </button>

                    <div class="modal fade" id="staticBackdrop<?php echo $i;  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="staticBackdropLabel">ลบข้อมูล</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body text-dark">
                                        <h5>ต้องการลบข้อมูลนะ ?</h5>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                    <a href="delete_employee.php?id=<?PHP echo $row['emy_id'];?>" class="btn btn-danger">ลบ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
                </tr>
                <?PHP $i++; }?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">เพิ่มข้อมูลพนักงาน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container p-3 mb-2  text-back"  style="background-color:#F28DB2;">
      <form action="add_employee.php" method="POST">
                    <h2 class="text-center t1">แบบฟอร์มข้อมูลพนักงาน</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ - นามสกุล</label>
                        <input type="text" name="name" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="โปรดใส่ ชื่อ - นามสกุล" required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">บัตรประชาชน</label>
                        <input type="text" name="card" class="form-control" id="card" aria-describedby="emailHelp" placeholder="โปรดใส่ บัตรประชาชน" maxlength ="13" onkeypress="return onlyNumberKey(event)" pattern="[0-9]{13}" title="โปรดใส่ เลขบัตรประชาชนให้ถูกต้อง"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทร</label>
                        <input type="text" name="Tel" class="form-control" id="Tel" aria-describedby="emailHelp" placeholder="โปรดใส่ เบอร์โทรศัพท์" required  onkeypress="return onlyNumberKey(event)" pattern="[0-9]{10}" title="โปรดใส่ เบอร์โทรศัพท์ให้ถูกต้อง" maxlength="10">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ข้อมูลเงินเดือน</label>
                        <input type="number" name="salary" class="form-control" id="salary" aria-describedby="emailHelp" placeholder="โปรดใส่ เงินเดือน" min ="10000" max ="200000"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ที่อยู่</label>
                        <textarea class="form-control" aria-label="With textarea" name="address" id="address" placeholder="โปรดใส่ ที่อยู่" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ตำแหน่ง</label>
                        <select name="position" id="position" class="form-control" require>
                          <?php 
                              include('connect_db.php');
                              $sql = "SELECT * FROM tb_position order by position_id ASC";
                              $query = mysqli_query($connection,$sql);
                              while($row = mysqli_fetch_array($query)){
                                echo '
                                  <option value='.$row['position_name'].'>'.$row['position_name'].'</option>
                                ';
                              }                         
                          ?>
                        </select>
                      </div>
                    <div style="padding-top:20px;"><button type="submit" class="btn btn-success">ตกลง</button>
                    <button type="reset" class="btn btn-danger">ลบ</button></div>
                  </form>
      </div>
    </div>
  </div>
</div>
        <script src="js/jquery.js"></script>
        <!-- <script src="js/bootstrap.bundle.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <!-- <script src="js/datatable.js"></script>
        <script src="js/datatable.bootstrap4.js"></script> -->
    <script>
    $(document).ready(function() {
        $('#table1').DataTable();
        $('#insert_position').click(function(e){
          e.preventDefault();
          var name = $('#fullname').val();
          var status = $('#status').val();
          var createdby = $('#createdby').val();

          $.ajax({
            url : "insert_position.php",
            type : "post",
            data : {name : name, status : status, createdby : createdby},
            success : function(data){
              alert(data);
              location.reload();
            }
          });
        });
    } );
    function delete_position(id){
        if(confirm('Are you sure you want to delete this user?')){
        $.get('delete_position.php?id='+id , function(data){
            alert(data);
            location.reload();
        });
        }
    }
    </script>
    <script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</body>
</html>