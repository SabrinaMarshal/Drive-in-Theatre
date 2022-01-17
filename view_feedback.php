<?php
  session_start();
 
 
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <link rel="stylesheet" href=nav.css >
 
    <style>
.col-sm{
    padding: 5px;
    background-color: #ddd;
}
</style>
</head>
<div class="topnav">
    <a href="newTheatre.php">New Theatre</a>
    <a href="newMovie.php">New movie</a>
  <a href="all_theatres.php">View All Theatres</a>
  <a href="all_movies.php">View all Movies</a>
  <a  class="active"href="view_feedback.php">View Feedback</a>
  <div class="topnav-right">
    
    <a href="logout.php">Logout</a>
  </div>
</div>




<body>
<?php 
        echo '<h4 style="padding:20px;" class="text-white bg-dark text-center"> Here are all the Feedbacks from the users</h4><br>';
    
        $db = mysqli_connect("localhost", "root","","theatre");

$list="select * from feedback";
$result=mysqli_query($db,$list);?>

<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
    <div class="col-sm">
                 <h6>Name:   <?php echo $row["Name"];?> <br></h6>
                 <p>  Does the webiste meet user's need:  <?php echo $row["requirements"]; ?><br>
                  Would the user use the website again:   <?php echo $row["future_use"];?><br></p>
                 <h6>  <?php echo $row["comments"];?><br></h6>
                     
                </div>

<hr>
                  
   <?php         
        }   
        ?>
     
</body>
</html>