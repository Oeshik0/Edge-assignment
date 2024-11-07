<?php
include "db-employee.php";
$sql= "SELECT* FROM employees ";
$result = $connection->query($sql);
$employees =$result->fetch_all(MYSQLI_ASSOC);  //associative array

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        td, th{
            border: 1px solid black;
            padding: 12px ;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl my-5"> Employee List</h1>
    <table class="mx-auto border p-5">
        <thead class="py-2 bg-blue-500 text-white font-medium">
            <tr >
            <!-- <th >Id</th> -->
                <th >Emploee ID</th>
                <th >Emploee Name</th>
                <th >Position</th>
                <th >Salay</th>
                <th >Hire_Date</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($employees as $oeshik): ?>
                <tr>
                <!-- <td><?= $oeshik['Id']; ?></td> -->
                    <td><?= $oeshik['Employee_Id']; ?></td>
                    <td><?= $oeshik['Employee_Name']; ?></td>
                    <td><?= $oeshik['Position']; ?></td>
                    <td><?= $oeshik['Salary']; ?></td>
                    <td><?= $oeshik['Hire_Date']; ?></td>
                    <td>
                        <a href="update-employee.php?Id=<?= $oeshik['Id']; ?>"><i class="fa-solid fa-pen-to-square border p-1.5 bg-blue-500 rounded-md text-white"></i></a>
                        <a href="delete-employee.php?Id=<?= $oeshik['Id']; ?>"><i class="fa-solid fa-trash border p-1.5 bg-red-500 rounded-md text-white"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>


