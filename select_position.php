<?PHP
    include('connect_db.php');
    $position_name =  intval($_GET['q']);
    // echo $position_name;
    $sql2 = "SELECT position_name FROM tb_position WHERE position_id = '$position_name'";
    $query2 = mysqli_query($connection,$sql2);
    while($row2 = mysqli_fetch_array($query2)) {
        $name = $row2['position_name'];
        
    }
    // echo $name;
    $sql = "SELECT * FROM tb_employee,tb_position WHERE emy_position = '$name' group by emy_id order by emy_id ASC";
    // $sql = "SELECT * FROM tb_employee,tb_position  group by emy_id order by emy_id ASC";

    $query = mysqli_query($connection,$sql);
    echo "<table class='table  table-sm text-black' id='table1'>
    <thead>
        <tr>
        <th scope='col'>ลำดับ</th>
        <th scope='col'>ชื่อ - นามสกุล</th>
        <th scope='col'>บัตรประชาชน</th>
        <th scope='col'>เบอร์โทร</th>
        <th scope='col'>ข้อมูลเงินเดือน</th>
        <th scope='col'>ที่อยู่</th>
        <th scope='col'>ตำแหน่ง</th>
        </tr>
        </thead>
        <tbody>";
        $i = 1;
        while($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row['emy_name'] . "</td>";
        echo "<td>" . $row['emy_card'] . "</td>";
        echo "<td>" . $row['emy_tel'] . "</td>";
        echo "<td>" . $row['emy_salary'] . "</td>";
        echo "<td>" . $row['emy_address'] . "</td>";
        echo "<td>" . $row['emy_position'] . "</td>";
        echo "</tr>";
        $i++;
        }
        echo "</tbody>";
    echo "</table>";
?>