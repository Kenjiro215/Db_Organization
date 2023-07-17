<?php

 $EmpName = $_POST['EmpName'];
 $DeptID = $_POST['DeptID'];
 $EmpTel = $_POST['EmpTel'];
 $EmpBirthDate = $_POST['EmpBirthDate'];
 $Age = $_POST['Age'];
 $IDCardNumber = $_POST['IDCardNumber'];
 $SexID = $_POST['SexID'];
 $EmpAddress = $_POST['EmpAddress'];
 $RoomID = $_POST['RoomID'];

$conn = mysqli_connect("localhost","root","12345678","db_sa") or die("Connection Failed");

$sql = "INSERT INTO employees(EmpName,DeptID,EmpTel,EmpBirthDate,Age,IDCardNumber,SexID,EmpAddress,RoomID) 
VALUES ('{$EmpName}','{$DeptID}','{$EmpTel}','{$EmpBirthDate}','{$Age}','{$IDCardNumber}','{$SexID}','{$EmpAddress}','{$RoomID}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8000");

mysqli_close($conn);

?>
