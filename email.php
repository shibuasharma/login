<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
    <link type="text/css" rel="stylesheet" href="login.css">
</head>
<body>
  <?php
  if(isset($_POST['log'])){
      echo $_POST['user'];
  }
  ?>
    <section>
        
              <div class="container-fluid">
              <form action="" method="post">
                      <label>Email</label><br>
                    <input type="email" placeholder="yes@gmail.com" name="user"><br><br>
                    <input type="submit" value="Search" name="log">
                    <input type="submit" value="Cancel" name="">
              </div>
    </section>

</body>
</html>