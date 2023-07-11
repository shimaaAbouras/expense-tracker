<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="loinn.css">
    <link rel="stylesheet" type="text/php" href="login1.php">

    <title>LOGIN</title>
</head>
<body>
    <section> 
      <div class ="ALL">
         <div class ="topbar">
            <img id="logo" src="img/Finance app-amico.png" alt="logo" style="vertical-align:middle;">
         <nav>
             <h1 class ="logo">Tracking Expenses</h1>
              <ul>   
                 <li><a href="hombage.PHP">Hom Bage</a></li>   
                 <li><a href="signup.php">Sign Up</a></li>    
                 <li><a href="login.php">Log In</a></li>                                          
                 <li><a href="#">About Us</a></li>     
                 <li><a href="logout.php">Log Out</a></li>
               </ul>         
          </nav>
      </div>
         <div class="form-box">
             <div class="form-box">
             <form method="POST" action="category.php" method="post">
                 <h2>login </h2>
                 <div class="inputbox">
                      <ion-icon name="mail-outline"></ion-icon>
                      <input type="email" name="Email"placeholder="Email"  required>
                       <label ></label>
                 </div>
                 <div class="inputbox">
                     <ion-icon name="lock-closed-outline"></ion-icon>
                     <input type="Password" name="Password" placeholder="Password" required>
                      <label ></label>
                  </div>
                  <div class ="buttom" >
                    <input type="submit"  class="btn" value="YOUR LOGIN" required>
                 </div>
                  
                  <div class="register">
                      <p>Don`t Have a account<a href="homebage.php">register</a></p>
                 </div> 
             </form>
         </div>
     </div>            
       <footer>
          Copyright © 2022-2023 UOT.
          All Rights are reserved</footer>  
  </section> 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>