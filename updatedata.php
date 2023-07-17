<?php
$EmpID = $_POST['EmpID'];
$EmpName = $_POST['EmpName'];
$DeptID = $_POST['DeptID'];
$EmpTel = $_POST['EmpTel'];
$EmpBirthDate = $_POST['EmpBirthDate'];
$Age = $_POST['Age'];
$IDCardNumber = $_POST['IDCardNumber'];
$SexID = $_POST['SexID'];
$EmpAddress = $_POST['EmpAddress'];
$RoomID = $_POST['RoomID'];

include 'config.php';

$sql = "UPDATE employees SET EmpName = '{$EmpName}', DeptID = '{$DeptID}', EmpTel = '{$EmpTel}', EmpBirthDate = '{$EmpBirthDate}',
Age = '{$Age}', IDCardNumber = '{$IDCardNumber}', SexID = '{$SexID}', EmpAddress = '{$EmpAddress}', RoomID = '{$RoomID}' WHERE EmpID = {$EmpID}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8000");

mysqli_close($conn);

?>
