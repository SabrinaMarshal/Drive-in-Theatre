<?php
  session_start();

 
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <link rel="stylesheet" href="nav.css">
 


</head>
<div class="topnav">
    <a href="newTheatre.php">New Theatre</a>
    <a href="newMovie.php">New movie</a>
  <a  class="active"href="all_theatres.php">View All Theatres</a>
  <a href="all_movies.php">View all Movies</a>
  <a  href="view_feedback.php">View Feedback</a>
  <div class="topnav-right">
    
    <a href="logout.php">Logout</a>
  </div>
</div>

<body>
<?php 
        echo '<h4 style="padding:20px;" class="text-white bg-dark text-center"> Here are all the Theatres</h4><br>';
    
        $db = mysqli_connect("localhost", "root", "", "theatre");

$list="select * from theatres";
$result=mysqli_query($db,$list);?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th class="bg-secondary text-white" scope="col">Name</th>
                        <th class="bg-secondary text-white" scope="col">City</th>
                        <th class="bg-secondary text-white" scope="col">phone</th>
                        <th class="bg-secondary text-white" scope="col">Address </th>
                        <th class="bg-secondary text-white" scope="col" style="width: 500px;"   >Picture </th>
                    
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
                <tbody>
                    <tr>
                      <th scope='row'><?php echo $row["Name"];?> </th>
                      <td ><?php echo $row["City"]; ?></td>
                      <td> <?php echo $row["Phone"];?></td>
                      <td> <?php echo $row["Address"];?></td>
                      <td> <img style="width:300px; height: 190px"src="images/<?php echo $row['Picture']?>"/></td>
                      
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>