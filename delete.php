<?php
include 'dbcon1.php' ;
if(isset($_GET['deleteid']))
{
    $id_expenses=$_GET['deleteid'];
  
    $sql="DELETE FROM expenses WHERE expenses.id_expenses = $id_expenses";
    
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data Delete sussfully";
        header('location:category.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}