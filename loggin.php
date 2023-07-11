<?php
              if(isset($_POST["submit"]))
              {
                $username=$_POST["username"];
                $password=$_POST["password"];
                require_once 'dbcone1.php';
                $sql = "SELECT * FROM users WHERE username ='$username'";
                $result =mysqli_query($conn,$sql); 
                $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if($user)
                {
                   if(password_verify($password,$user["password"])){
                    header("location: homebage.php");
                    die();  

                  }
                  else{
                    echo "<div class='alert alert-danger'>password dose not match</div>";

                  }
                }  else{
                  echo "<div class='alert alert-danger'>username dose not match</div>";
                }    
              }
          ?>