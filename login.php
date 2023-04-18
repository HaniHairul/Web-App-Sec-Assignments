<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
 
        if(isset($_POST['submit'])) {    
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . sha1($password) . "'";
            $result = mysqli_query($con, $query) or die(mysql_error()); 
            $count = mysqli_num_rows($result);

        
            if($count>0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['ROLE'] = $row->role_as;
            $_SESSION['IS_LOGIN'] = 'yes';
            if($row['role_as'] == 1) {
                // Redirect to user dashboard page
                header("Location: admin.php");
                die();
            }
            if ($row['role_as'] == null) {
                header("Location: index.html");
                die();
            }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }}
     else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="email" class="login-input" name="email" placeholder="email" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register.php">New Registration</a></p>
  </form>
  
<?php
    }
?>
</body>
</html>