<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $sql = "select * from users where Email = '$Email' and password = '$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: homebage.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "category.php";
                        alert("category failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>