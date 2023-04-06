<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "webapp";
      
    
    $con = mysqli_connect($host, $user, $password, $db_name);
    
    $matric = $_POST['matricno'];
    $email = $_POST['email'];  
    $pwd = $_POST['password'];


    $hashed_password = password_hash($pwd, PASSWORD_BCRYPT);
    $query = "INSERT INTO login (matric_id, email, password) VALUES (?,?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'sss', $matric, $email, $hashed_password);
    mysqli_stmt_execute($stmt);

    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
 
     
      
    // $query = "SELECT password FROM login WHERE email = ?";
    // $stmt = mysqli_prepare($con, $query);
    // mysqli_stmt_bind_param($stmt, 's', $email);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_bind_result($stmt, $hashed_password_from_db);
    // mysqli_stmt_fetch($stmt);    
    
    // if (password_verify($pwd, $hashed_password_from_db)) {
    //     echo include 'login.php';  
    //   } else {
    //     echo "<h1> Login failed. Invalid email or password.</h1>"; 
    //   }
    
    
    
    //to prevent from mysqli injection  
    // $email = $_POST['email'];  
    // $password = $_POST['password']; 
        // $email = stripcslashes($email);  
        // $password = stripcslashes($password);  
        // $email = mysqli_real_escape_string($con, $email);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        // $sql = "select *from login where email = '$email' and password = '$password'";  
        // $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        // if($count == 1){  
        //     echo include 'index.html';  
        // }  
        // else{  
        //     echo "<h1> Login failed. Invalid email or password.</h1>";  
        //  }     
?>  