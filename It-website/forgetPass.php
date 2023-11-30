<?php      
    include('connection.php'); 
    session_start();  
    $email = $_POST['email'];  

        //to prevent from mysqli injection  
        $username = stripcslashes($email);  
        $username = mysqli_real_escape_string($con, $email);  
      
        $sql = "select Pass 
        from users 
        where Email = '$email'
        ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
            //echo "password: " .$row["Pass"]." ";
            $to = $email; 
            $from = 'iconsolutionsbooking@gmail.com';
            $fromName = 'Icon Solutions';
            $headers = 'From: .$from.';             
            $subject = "Forget Password"; 
            
            $message = "Your password is: " .$row["Pass"]. ""; 
            
            // Additional headers 
            //$headers = 'From: '.$fromName.'<'.$from.'>'; 
            
            // Send email 
            if(mail($to, $subject, $message,$headers)){
                $_SESSION['sucEmail']="Email has been sent";
                header('Location: forgetPassUI.php'); 
            }else{ 
                $_SESSION['failEmail']="Email sending failed. Give correct email";
                header('Location: forgetPassUI.php'); 
            }
        }  
        else{  
            $_SESSION['failEmail']="Email sending failed. Give correct email";
            header('Location: forgetPassUI.php');   
        }     
?>  