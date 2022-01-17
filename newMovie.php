<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
?>
<!DOCTYPE  HTML>
<html>
    <head>  <title>New Movie </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <style>
    

    .wrap{
      width:600px;
    margin:auto;
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
      width:600px;
    margin:auto;
    text-align:center;
    color:white;
    padding:5px;
    background-color: rgb(0,0,0.2); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  
    }
    input{
    padding:10px;
    margin:5px;
    border: 1px solid #4682B4;
    border-radius:5px;
    }
  
    button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none
     
    }
    
    </style>

    </head>
    <div class="topnav">
    <a href="newTheatre.php">New Theatre</a>
    <a class="active"  href="newMovie.php">New movie</a>
  <a  href="all_theatres.php">View All Theatres</a>
  <a href="all_movies.php">View all Movies</a>
  <a  href="view_feedback.php">View Feedback</a>
  <div class="topnav-right">
    
    <a href="logout.php">Logout</a>
  </div>
</div>
    <?php
   

   
   if(isset($_GET['Movie'])) {   
          if($_GET['movie'] == "success")
           echo '<h4 class="bg-success text-center" align="center" >New movie  was successfully added!</h4>';
       
       }
       ?>

    
    <body>
      <h3> New Movie</h3>
    <div class="wrap">
     
    
    <form  method="post" action="movie.php"  enctype="multipart/form-data" >
      <div class="form-group">
      <label>Movie Name</label>
          <input type="text" class="form-control" name="movie_name" placeholder="Movie Name" required="required">
          <small class="form-text text-muted">Movie name must be 2-20 characters long</small>
      </div>

      <div class="form-group">
      <label>Date</label>
          <input type="date" class="form-control" name="date" placeholder="Date" required="required">
          <small class="form-text text-muted">Date should be greater than today</small>
      </div>

      <div class="form-group">
      <label>Time</label>
          <input type="text" class="form-control" name="time" placeholder="time" required="required">
          <small class="form-text text-muted">Time format is 24:00</small>
      </div>
      <div class="form-group">
        <label>Choose Theatre</label>
        <select class="form-control" id="theatre" name="theatre">
		<?php
		$sql="select Name from theatres";
		$res=mysqli_query($db,$sql);
		while ( $result = $res->fetch_assoc() ) {
			$name=$result['Name'];?>
          <option value="<?php echo $name;?>"><?php echo $name;?></option>
		<?php } ?>
        </select>
    </div>

      
        <div class="form-group">
            <label>Genre </label>
                <input type="text" class="form-control" name="genre" placeholder="Genre" required="required">
                <small class="form-text text-muted">Genre must be 2-20 characters long</small>
            </div>

         <div class="form-group">
            <label>Rating </label>
                <input type="text" class="form-control" name="rating" placeholder="Rating" required="required">
                <small class="form-text text-muted">Rating must have a value between 1 to 10</small>
            </div>
                 
            <div class="form-group">
                <label>Description </label>
                <textarea class="form-control" name="description"  placeholder="Type here.." rows="3"></textarea>
                    <small class="form-text text-muted">Description must be less than 200 characters </small>
                </div>

                <div class="form-group">
                    <label>Cost </label>
                        <input type="number" class="form-control" name="cost" placeholder="Cost" required="required">
                        <small class="form-text text-muted">Cost of one ticket</small>
                    </div>
        
    
                <div class="form-group">
      <label >Upload Pictures</label>
          <input type="file" class="form-control" name="pic" required="required">
          <small class="form-text text-muted">Upload a jpg,png or jpeg file</small>
      </div>
      
      <div class="form-group">
      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button>
      </div>

      </div>
  </form>
    </body>
    </html>
