<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add Employee</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>EmpName</label>
            <input type="text" name="EmpName" required/>
        </div>
        <div class="form-group">
            <label>DeptID</label>
            <input type="number" name="DeptID" required/>
        </div>
        <div class="form-group">
            <label>EmpTel</label>
            <input type="tel" name="EmpTel" required/>
        </div>
        <div class="form-group">
            <label>EmpBirthDate</label>
            <input type="date" name="EmpBirthDate" required/>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="Age" required/>
        </div>
        <div class="form-group">
            <label>IDCardNumber</label>
            <input type="number" name="IDCardNumber" required/>
        </div>
        <div class="form-group">
            <label>SexID</label>
            <input type="number" name="SexID" required/>
        </div>
        <div class="form-group">
            <label>EmpAddress</label>
            <input type="text" name="EmpAddress" required/>
        </div>
        <div class="form-group">
            <label>RoomID</label>
            <input type="number" name="RoomID" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
