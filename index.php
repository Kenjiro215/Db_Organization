<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Employees</h2>
    <?php
      include 'config.php';
  
      $sql = "SELECT * FROM employees";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);
      if($count> 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>EmpID</th>
        <th>EmpName</th>
        <th>DeptID</th>
        <th>EmpTel</th>
        <th>EmpBirthDate</th>
        <th>Age</th>
        <th>IDCardNumber</th>
        <th>Sex</th>
        <th>EmpAddress</th>
        <th>RoomID</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($res)){
          ?>
            <tr>
                <td><?php echo $row['EmpID']; ?></td>
                <td><?php echo $row['EmpName']; ?></td>
                <td><?php echo $row['DeptID']; ?></td>
                <td><?php echo $row['EmpTel']; ?></td>
                <td><?php echo $row['EmpBirthDate']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['IDCardNumber']; ?></td>
                <td><?php echo $row['SexID']; ?></td>
                <td><?php echo $row['EmpAddress']; ?></td>
                <td><?php echo $row['RoomID']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['EmpID']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['EmpID']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Employee Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
