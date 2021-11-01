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



                      