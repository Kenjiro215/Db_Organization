<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Employee</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>EmpID</label>
            <input type="text" name="EmpID" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $EmpID = $_POST['EmpID'];

        $sql = "SELECT * FROM employees WHERE EmpID = {$EmpID}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) >0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">EmpName</label>
            <input type="hidden" name="EmpID"  value="<?php echo $row['EmpID']; ?>" />
            <input type="text" name="EmpName" value="<?php echo $row['EmpName']; ?>" />
        </div>
        <div class="form-group">
          <label>DeptID</label>
          <input type="number" name="DeptID" value="<?php echo $row['DeptID']; ?>"/>
      </div>
      <div class="form-group">
          <label>EmpTel</label>
          <input type="tel" name="EmpTel" value="<?php echo $row['EmpTel']; ?>"/>
      </div>
      <div class="form-group">
          <label>EmpBirthDate</label>
          <input type="date" name="EmpBirthDate" value="<?php echo $row['EmpBirthDate']; ?>"/>
      </div>
      <div class="form-group">
          <label>Age</label>
          <input type="number" name="Age" value="<?php echo $row['Age']; ?>"/>
      </div>
      <div class="form-group">
          <label>IDCardNumber</label>
          <input type="number" name="IDCardNumber" value="<?php echo $row['IDCardNumber']; ?>"/>
      </div>
      <div class="form-group">
          <label>SexID</label>
          <input type="number" name="SexID" value="<?php echo $row['SexID']; ?>"/>
      </div>
      <div class="form-group">
          <label>EmpAddress</label>
          <input type="text" name="EmpAddress" value="<?php echo $row['EmpAddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>RoomID</label>
          <input type="number" name="RoomID" value="<?php echo $row['RoomID']; ?>"/>
      </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
