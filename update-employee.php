<?php
include 'db-employee.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM employees WHERE Id=$Id";

    $result = $connection->query($sql);
    
    $oeshik= $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Id=$_POST['Id'];
        $Employee_Id=$_POST['id'];
        $Employee_Name=$_POST['name'];
        $Position=$_POST['position'];
        $Salary=$_POST['salary'];
        $Hire_Date=$_POST['date'];

        $sql="UPDATE employees SET Employee_Id='$Employee_Id', Employee_Name= '$Employee_Name', Position='$Position', Salary='$Salary', Hire_Date='$Hire_Date' WHERE Id = $Id";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: employee-list.php");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Update employee</h1>
    <form action="update-employee.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
    <input name="Id" type="hidden" value="<?= $oeshik['Id']; ?>" placeholder="Enter employee id" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="id" type="number" value="<?= $oeshik['Employee_Id']; ?>" placeholder="Enter student Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" value="<?= $oeshik['Employee_Name']; ?>" placeholder="Enter student Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="position" type="text" value="<?= $oeshik['Position']; ?>" placeholder="Enter employee position" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="salary" value="<?= $oeshik['Salary']; ?>" type="number" placeholder="Enter employee salary" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="date" type="text" value="<?= $oeshik['Hire_Date']; ?>" placeholder="Enter hire_date" class="w-full border border-blue-500 p-2 rounded-md" onfocus="(this.type='date')" onblur="(this.type='text')">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>