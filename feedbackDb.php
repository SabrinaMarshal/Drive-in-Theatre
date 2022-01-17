<?php

session_start();


  if(!isset($_SESSION['username']))
  header('location:login2.php');

  
  $conn=mysqli_connect('localhost','root','');
  mysqli_select_db($conn,'theatre');

if(isset($_POST['feedback-submit'])) {
        $name= $_POST['name'];
    
        $requirements= $_POST['req'];
        $future= $_POST['future'];
        $comments= $_POST['comments'];
   
    
        echo $name;
        echo $requirements;
        echo $future;
        echo $comments;

        $res="insert into feedback(Name,requirements,future_use,comments) 
        values('$name','$requirements','$future','$comments')";
    mysqli_query($conn,$res);
    header("Location:feedbackForm.php?feedback=success");


}

?>
