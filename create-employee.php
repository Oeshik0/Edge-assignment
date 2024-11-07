<?php
include "db-employee.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Employee_Id = $_POST['id'];
    $Employee_Name = $_POST['name'];
    $Position = $_POST['position'];
    $Salary = $_POST['salary'];
    $Hire_Date = $_POST['date'];

    $sql = "INSERT INTO employees (Employee_Id, Employee_Name, Position, Salary, Hire_Date) VALUES ('$Employee_Id', '$Employee_Name', '$Position', '$Salary','$Hire_Date')";
    if($connection->query($sql)==TRUE){
        header("Location: employee-list.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Create employee</h1>
    <form action="create-employee.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
        <input name="id" type="number" placeholder="Enter employee Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" placeholder="Enter employee Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="position" type="text" placeholder="Enter position" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="salary" type="number" placeholder="Enter salary" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="date" type="text" placeholder="Enter hire_date" class="w-full border border-blue-500 p-2 rounded-md" onfocus="(this.type='date')" onblur="(this.type='text')">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>