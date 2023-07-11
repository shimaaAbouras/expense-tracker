<?php
include 'dbcon1.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-U-compatible" content="IE=edge">
   <meta name="viewport"content="width=device-width ,initial-scale=1.0">
   <link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>Expense Tracker</title>
 </head>  
<body>
    <div class="containar">
        <button class="btn btn-primary my-5"><a href="expenses.php" class="text-light">ADD</a></button>
        <table class="table">
       <thead>
           <tr>
                <th scope="col">.N</th>
              <th scope="col">Type</th>
              <th scope="col">category</th>
             <th scope="col">Desciption</th>
               <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
          </tr>
      </thead>
      <div class="containar">
        <table class="table">
       <thead>
     <?php
    
     $sql="SELECT * FROM expenses";
     $result=mysqli_query($con,$sql);
     
     if ($result)
     {
     while($row=mysqli_fetch_assoc($result))
     {
      $id_expenses=$row['id_expenses'];
      $Type=$row['Type'];
     $category=$row['category'];
     $Description=$row['Description'];
     $Amount=$row['Amount'];
     $Date=$row['Date'];
     echo'<tr>
     <th scope="row">'.$id_expenses.'</th>
       <td>'.$Type.'</td>
        <td>'.$category.'</td>
         <td>'.$Description.'</td>
         <td>'.$Amount.'</td>
        <td>'.$Date.'</td>
      <td >
      <button class="btn btn-primary" ><a href="update.php?
      updateid='.$id_expenses.'" class="text-light">Update</a></button>
     <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id_expenses.'"class="text-light">Delete</a></button>
     </td>
     </tr>';
     }
    }
         
     ?>
          </tbody>
         </table>
         <button class="btn btn-primary my-5"><a href="hombage.php" class="text-light">logout</a></button>
      </div>
</body>
</html>