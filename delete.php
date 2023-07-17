<?php include 'header.php';

if(isset($_POST['deletebtn'])){

include "config.php";
$EmpID = $_POST['EmpID'];

$sql = "DELETE FROM employees WHERE EmpID = {$EmpID}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8000");

mysqli_close($conn);

}
?>
<div id="main-content">
    <h2>Delete Employee</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>EmpID</label>
            <input type="number" name="EmpID" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
