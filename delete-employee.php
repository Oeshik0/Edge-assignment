<?php
include 'db-employee.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "DELETE FROM employees WHERE Id=$Id";

    if($connection->query($sql)==TRUE)
        {
            header("Location: employee-list.php");
        }
}
?>