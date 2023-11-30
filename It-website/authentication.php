<?php      
    include('connection.php');
    session_start();  
    $email = $_POST['email'];  
    $password = $_POST['psw'];

        //to prevent from mysqli injection  
        $username = stripcslashes($email);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select Name from users where Email = '$email' and Pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            $_SESSION['name']= "".$row["Name"]."!";
            header('Location: home.php'); 
        }  
        else{  
            $_SESSION['fail'] = "<h1> Login failed. Invalid username or password.</h1>";
            header('Location: index.php');  
        }     
?>  