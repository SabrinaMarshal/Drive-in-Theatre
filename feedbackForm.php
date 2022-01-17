<?php
  session_start();
  //if(!isset($_SESSION['username']))
  //header('location:login2.php');
 
?>

<!DOCTYPE  HTML>
<html>
    <head>  <title>Feedback
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <style>
    body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

    .wrap{
    width:600px;
    margin:auto;
    margin-top: 0px;
       padding:50px;
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    }
    
    form{
    border:1px dotted white;
    background-color:#f8f5ee;
    padding:10px;
    }

    h3{
    text-align:center;
    
    color:white;
    width:600px;
    margin:auto;
    margin-top: 25px;
    
  align-content: center;
    
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    }
   
  

    button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none;
     
    }

h4{
    padding: 20px;
  align-content: center;

}    
    
    </style>
    </head>
  

    
    <body>
 <div class="topnav">
      <a  href="Home.html">Home Page</a>
      <a  href="theatrelist.php">Book movie</a>
      <a  href="view_booked.php">Delete booking</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav-right">
	  <a href="about.html">About Us</a>
      <a class="active" href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>
    <?php
    if(isset($_GET['feedback'])) {   
           if($_GET['feedback'] == "success"){ 
            echo '<h4 class="bg-success text-center" align="center" >Thanks for the feedback !!</h4>';
        }
        }
        ?>
<h3> Feedback Form</h3>
    <div class="wrap"><form action="feedbackDb.php" method="post">
    
            <div class="form-group">
            <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" >
                <small class="form-text text-muted">This field is not neccessary</small>
            </div>
           
         
<div class="form-group">
<label>Did our website meet your requirements?</label>
     <div class="radio">
      <label><input type="radio" value="yes" name="req" checked>Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio"  value="no" name="req">No</label>
    </div>
    </div>

    <div class="form-group">
<label>Would you use our website in the future?</label>
            <div class="radio">
      <label><input type="radio" value="yes" name="future" checked>Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="no" name="future">No</label>
    </div>
    </div>
        
            <div class="form-group">
            <label>How can we improve our website/service?</label>
                <textarea class="form-control" name="comments" placeholder="Please Type here..." rows="3"></textarea>
                <small class="form-text text-muted"> This field is not neccessary</small>
            </div>        
        
            <div class="form-group">
            <button type="submit" name="feedback-submit" class="btn btn-dark btn-lg btn-block">Submit </button>
            </div>
        </form>
        </div>
    
    </body>
    </html>
