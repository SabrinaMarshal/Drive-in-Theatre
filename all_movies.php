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
  <a  href="all_theatres.php">View All Theatres</a>
  <a class="active" href="all_movies.php">View all Movies</a>
  <a  href="view_feedback.php">View Feedback</a>
  <div class="topnav-right">
    
    <a href="logout.php">Logout</a>
  </div>
</div>

<body>
<?php 
        echo '<h4 style="padding:20px;" class="text-white bg-dark text-center"> Here are all the Theatres</h4><br>';
    
        $db = mysqli_connect("localhost", "root", "", "theatre");

$list="select * from movie";
$result=mysqli_query($db,$list);?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th class="bg-secondary text-white" scope="col">Name</th>
                        <th class="bg-secondary text-white" scope="col">Theatre</th>
                        <th class="bg-secondary text-white" scope="col">Date</th>
                        <th class="bg-secondary text-white" scope="col">Time</th>
                        <th class="bg-secondary text-white" scope="col">Genre </th>
                        <th class="bg-secondary text-white" scope="col">Rating </th>
                        <th class="bg-secondary text-white" scope="col">Description </th>
                        <th class="bg-secondary text-white" scope="col">Cost </th>
                        <th class="bg-secondary text-white" scope="col" style="width: 500px;"   >Picture </th>
                    
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                    ?>
                 
                <tbody>
                    <tr>
                      <th scope='row'><?php echo $row["Name"];?> </th>
                      <td  ><?php echo $row["Theatre_id"]; ?></td>
                      <td> <?php echo $row["Date"];?></td>
                      <td> <?php echo $row["Time"];?></td>
                      <td> <?php echo $row["Genre"];?></td>
                      <td> <?php echo $row["Rating"];?></td>
                      <td> <?php echo $row["Description"];?></td>
                      <td> <?php echo $row["Cost"];?></td>
                      <td> <img style="width:200px; height: 190px"src="images/<?php echo $row['Picture']?>"/></td>
                      
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>