<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $pwd = $_POST['password']; 
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $pwd = stripcslashes($pwd);  
        $email = mysqli_real_escape_string($con, $email);  
        $pwd = mysqli_real_escape_string($con, $pwd);  
      
        $sql = "select *from login where email = '$email' and password = '$pwd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $hashed_password_from_db);
    mysqli_stmt_fetch($stmt);    
    
    if (password_verify($pwd, $hashed_password_from_db)) {
        echo include 'login.php';  
      } else {
        echo "<h1> Login failed. Invalid email or password.</h1>"; 
      }
          
        // if($count == 1){  
        //     echo "<h1><center> Login successful </center></h1>";  
        // }  
        // else{  
        //     echo "<h1> Login failed. Invalid username or password.</h1>";  
        // }     
?>  

