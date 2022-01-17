<?php
  session_start();
 
?>

<!DOCTYPE  HTML>
<html>
    <head>  <title>Reservation
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

  
    </style>
    </head>
    <body>
	<div class="topnav">
      <a  href="home.php">Home Page</a>
      <a  href="theatrelist.php">Book movie</a>
      <a  href="view_booked.php">Delete booking</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav-right">
	  <a class="active" href="about.html">About Us</a>
      <a href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>
      
<h3> Select Date Time</h3>
    <div class="wrap"><form action="reserve.php" method="post">
    
   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Enter Time </label>
		<select class="form-control" name="time">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
                 
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Select Seat</button>
            </div>
        </form>
        </div>
    </body>
    </html>
