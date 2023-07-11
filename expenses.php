<?php
include_once "dbcon1.php";

if(isset($_POST['submit']))
{
    $Type= $_POST['Type'];
    $category= $_POST['category'];
    $Description = $_POST['Description'];
    $Amount = $_POST['Amount'];
    $Date= $_POST['Date'];
    
    
    $sql = "INSERT INTO expenses (Type,category,Description,Amount,Date) 
    VALUES ('$Type','$category','$Description','$Amount','$Date')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data inserted sussfully";
        header('location:category.php');
    }
    else
    {
        die(mysqli_error($con));
    }

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-U-compatible" content="IE=edge">
   <meta name="viewport"content="width=device-width ,initial-scale=1.0">
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel='stylesheet'>
 </head>  
<body>
  <div class="container my-5">
       <form  method="post" >
       <div class="form-group">
         <label >Type</label>
         <input type="text" class="form-control" placeholder="Enter The Type" name="Type"autocomplete="off">
      </div>
     <div class="form-group">
         <label >category</label>
         <input type="text" class="form-control" placeholder="Enter The category" name="category" autocomplete="off">
     </div>   
       <div class="form-group">
         <label >Description</label>
         <input type="text" class="form-control" placeholder="Enter your Type" name="Description"autocomplete="off">
      </div>
      <div class="form-group">
         <label >Amount</label>
         <input type="number" class="form-control"placeholder="Enter your Amount" name="Amount" autocomplete="off">
     </div> 
     <div class="form-group">   
         <label >Date</label>
          <input type="date" class="form-control" name="Date">
      </div>
      <button type="submit" class="btn btn-primary" name="submit"> ADD </button>
     </from>
  </div>

      
     
</body>
</html>