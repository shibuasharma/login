<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['login'])){
        echo $_POST['fn']."<br>";
        echo $_POST['mn']."<br>";
        echo $_POST['ln']."<br>";
        echo $_POST['email']."<br>";
        echo $_POST['num']."<br>";
        echo $_POST['sal']."<br>";
    }elseif(isset($_POST['can'])){
        echo "none";
    }
    
    ?>
    <form action="form.php" method="post">
        <h1>Login Form</h1>
       <label>First name</label>
       <input type="text" name="fn" placeholder="first name"><br>
       <label>last name</label>
       <input type="text" name="ln" placeholder="last name"><br>
       <label>Email Id</label>
       <input type="Email" name="email" placeholder="Email@gmail.com"><br>
       <label>Mobile</label>
       <input type="number" name="num" placeholder="number"><br>
       <label>Salary</label>
	   <input type="number" name="sal" placeholder="salary"><br>
       <textarea name="td" id="" cols="20" rows="5" placeholder="description......"></textarea><br>
	   <button type="login" name="login">login</button>
       <input type="reset" class="yes" name="can">
       
    </form>
</body>
</html>