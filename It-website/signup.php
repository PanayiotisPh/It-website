<?php     
    include('connection.php');
    session_start();  
    $name = $_POST['name'];  
    $surname = $_POST['Surname'];  
    $email = $_POST['email'];  
    $password = $_POST['psw']; 

        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $surname = stripcslashes($surname);
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  

        $name = mysqli_real_escape_string($con, $name);  
        $surname = mysqli_real_escape_string($con, $surname);
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);
        
        //check if email already in database
        $query = "select Name from users where Email = '$email'";  
        $result = mysqli_query($con, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        if($count < 1){
            $sql = mysqli_prepare($con,"INSERT INTO users (Email, Pass, Name, Surname) 
            VALUES ('$email', 
            '$password', 
            '$name', 
            '$surname') 
            ");
            if(mysqli_stmt_execute($sql))
            {
                header('Location: index.php'); 
            }
        } else {
            $_SESSION['failSign'] = "Email already exists";
            header('Location: index.php');  
        }
      
        // insert in database 
        //$rs = mysqli_query($con, $sql);

        
?>  