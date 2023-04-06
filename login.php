 <!DOCTYPE html>
<html>  
<head>  
    <title>Student login system</title>  
      
    <link rel = "stylesheet" type = "text/css" href = "loginStyle.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "index.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Email: </label>  
                <input type = "email" id ="email" name  = "email" pattern=".+@gmail\.com" title="Use only Gmail account."/>  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>   
    
    
    
    
    <!-- validation for empty field    -->
     <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Please write your email.");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Please wrire your password.");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>