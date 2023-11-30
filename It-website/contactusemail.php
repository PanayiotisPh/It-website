<?php      
    include('connection.php'); 
    session_start();
    $name = $_POST['name'];
    $surname = $_POST['surname']; 
    $email = $_POST['email']; 
    $text = $_POST['text']; 


        //to prevent from mysqli injection  
        $username = stripcslashes($email);  
        $username = mysqli_real_escape_string($con, $email);  
      
            $to = 'iconsolutionsbooking@gmail.com'; 
            $from = 'iconsolutionsbooking@gmail.com';
            $fromName = $name;
            $headers = 'From: .$from.';             
            $subject = "Contact Us"; 
            
            $message = "User $name $surname \r\n with email $email \r\n $text" ; 
            
            
            if(mail($to, $subject, $message,$headers)){
               // echo "Email has been sent";
                $_SESSION['sucEmailCont']="Email has been sent";
                header('Location: contactus.php'); 
            }else{ 
                //echo "Email sending failed. Give correct email";
                $_SESSION['failEmailCont']="Email sending failed. Give correct email";
                header('Location: contactus.php'); 
            }    
?>  