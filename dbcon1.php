<?php
$con=new mysqli("localhost","root","","expenses_tr");
if(!$con)
{
    die(mysqli_error($con));
}
?>