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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>หน้าหลัก</title>
</head>
<style>
  .t1{
    font-family: 'Kanit', sans-serif;
    font-size: 25px;
    font-weight: bold;
  }
  .t3{
    font-family: 'Kanit', sans-serif;
    font-size: 35px;
    font-weight: bold;
  }
</style>
<body style="background-color:#D96690"> 
  <!-- <div style="background-image:url(bg.jpg)" width="500" height="500" > -->
    <div class="container p-3 mb-2 bg-muted text-back mt-4">
    
      <?PHP include('nav.php')?>
      <div  style="background-color:#D96690;" >
      <div class="row" align="center"> 
            <div class="col-md-12 mt-4">
                <h1 class="text-center">หน้าหลัก</h1>
            </div>
            <div class="col-md-4 mt-4 ">
              <div class="card" style="width: 18rem;">
              <div class="card-header text-dark t1">
              การจัดการข้อมูลพนักงาน
              </div>    
                <div class="card-body" style="background-color:#F28DB2;">
                <center><img src="position-removebg-preview.png" alt="users" width="200" height="200"></center>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <a href="position.php" class="btn btn-primary btn-lg mt-3">จัดการ</a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mt-4">
              <div class="card" style="width: 18rem;">
              <div class="card-header text-dark t1">
              การจัดการข้อมูลตำแหน่ง
              </div>  
                <div class="card-body" style="background-color:#F28DB2;">
                <center><img src="users-removebg-preview.png" alt="position" width="200" height="200"></center>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                    <a href="admin_position.php" class="btn btn-primary btn-lg mt-3 ">จัดการ</a>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mt-4">
              <div class="card" style="width: 18rem;">
              <div class="card-header text-dark t1">
              รายงาน
              </div> 
                <div class="card-body" style="background-color:#F28DB2;">
                <center><img src="ss.jfif" alt="product" width="200" height="200"></center>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                    <a href="emy.php" class="btn btn-primary btn-lg center mt-3">จัดการ</a>
                    </div>
                  </div>
                </div>
                  
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  <!-- </div> -->
</body>
</html>