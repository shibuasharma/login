<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="login.css">
    <title>Login Form</title>
</head>
<body>
  <?php
    
    if(isset($_POST['sub'])){
      echo $_POST['user']."<br>";
      echo $_POST['pass']."<br>";
    }
  ?>
    <section>
     <form action="" method="post">
      <div class="box">
         <div class="form">
           <div class="box2">
           <img src="man.png" alt="">
           </div>
            <h2>Login</h2>
               <div class="box5">
                 <input type="text" placeholder="username" name="user" id="">
                 <img src="user.png" alt=""><br>
                 <input type="password" placeholder="password" name="pass" id="">
                 <img src="lock.png" alt="">
                <div class="box3">
                <input type="submit" value="login" name="sub" style="margin-left: 7%;">
                <input type="reset" value="reset" name="res">
                </div>
               </div>
            </form><br>
            <div class="for">
            <p>forget &nbsp;<a href="email.php">password?</p>
            </div>
         </div>
       </div>
    </section>
</body>
</html>