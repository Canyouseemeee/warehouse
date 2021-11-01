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
                    <h1 class="text-center t1">ค้นหาข้อมูลพนักงาน</h1>
                    <center><img src="position-removebg-preview.png" alt="position-removebg-preview" width="150" height="150"></center>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ตำแหน่ง</label>
                            <select name="position" id="position" class="form-control" onchange="showUser(this.value)" require>
                            <option value="" disabled selected>เลือกตำแหน่งที่ต้องค้นหาพนักงาน</option>
                            <?php 
                                include('connect_db.php');
                                $sql = "SELECT * FROM tb_position order by position_id ASC";
                                $query = mysqli_query($connection,$sql);
                                while($row = mysqli_fetch_array($query)){
                                    echo '
                                    <option value='.$row['position_id'].'>'.$row['position_name'].'</option>
                                    ';
                                }                         
                            ?>
                            </select>
                        </div>
                    
                    <a href="index.php" class="btn btn-success">กลับ</a>
                    <!-- <a href="select_position.php" class="btn btn-success">ค้นหา</a> -->
                    <div class="card"  style="background-color:#F28DB2;">
                    <!-- <table class="table  table-sm text-black" id="table1" >
                    <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ - นามสกุล</th>
                        <th scope="col">บัตรประชาชน</th>
                        <th scope="col">เบอร์โทร</th>
                        <th scope="col">ข้อมูลเงินเดือน</th>
                        <th scope="col">ที่อยู่</th>
                        <th scope="col">ตำแหน่ง</th>
                        
                    </tr>
                    </thead>
                    <tbody> -->
                        <div id="txtHint"><b>ไม่มีข้อมูล</b></div>
                    <!-- </tbody> -->
                <!-- </table> -->
                </div>
                </div>
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
                function showUser(str) {
                if (str=="") {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","select_position.php?q="+str,true);
                xmlhttp.send();
                }
            </script>
        <script>
        $(document).ready(function() {
            $('#table1').DataTable();
            $('#insert_position').click(function(e){
              e.preventDefault();
              var name = $('#fullname').val();
              var status = $('#status').val();
              var createdby = $('#createdby').val();
    
              $.ajax({
                url : "select_position.php",
                type : "post",
                data : {name : name, status : status, createdby : createdby},
                success : function(data){
                  alert(data);
                  location.reload();
                }
              });
            });
        } );
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