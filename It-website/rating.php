<?php      
    include('connection.php');
    session_start();

    if(isset($_POST['send'])){

        $it = $_POST['it'];  
        $rate = $_POST['rate'];   

        $sql = $con->prepare("INSERT INTO review (Rating,itID) 
        VALUES (?,?)");
        $sql ->bind_param("ii",$rate,$it);

       if($sql->execute()){
       
        header('Location: review.php'); 
       };
      
    }
?>  