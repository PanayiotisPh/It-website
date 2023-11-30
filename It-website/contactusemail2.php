<?php      
    include('connection.php'); 
    session_start();
    $name2 = $_POST['name2'];
    $surname2 = $_POST['surname2']; 
    $email2 = $_POST['email2']; 
    $text2 = $_POST['text2']; 


        //to prevent from mysqli injection  
        $username2 = stripcslashes($email2);  
        $username2 = mysqli_real_escape_string($con, $email2);  
      
            $to2 = 'iconsolutionsbooking@gmail.com'; 
            $from2 = 'iconsolutionsbooking@gmail.com';
            $fromName2 = $name2;
            $headers2 = 'From: .$from.';             
            $subject2 = "Contact Us"; 
            
            $message2 = "User $name2 $surname2 \r\n with email $email2 \r\n $text2" ; 
            
            
            if(mail($to2, $subject2, $message2,$headers2)){
               // echo "Email has been sent";
                $_SESSION['sucEmailCont2']="Email has been sent";
                header('Location: contactus2.php'); 
            }else{ 
                //echo "Email sending failed. Give correct email";
                $_SESSION['failEmailCont2']="Email sending failed. Give correct email";
                header('Location: contactus2.php'); 
            }    
?>  