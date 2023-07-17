<?php

$EmpID = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM employees WHERE EmpID = {$EmpID}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8000");

mysqli_close($conn);

?>
