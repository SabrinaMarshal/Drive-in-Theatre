<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login2.php');
  $user=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <link rel="stylesheet" href="nav.css">

    <style>

h4{
    margin:auto;
    padding: 20px;
  align-content: center;

} 
</style>
</head>

<body>
<div class="topnav">
      <a  href="Home.html">Home Page</a>
      <a  href="theatrelist.php">Book movie</a>
      <a  class="active" href="view_booked.php">Delete booking</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav-right">
	  <a href="about.html">About Us</a>
      <a href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>
<?php 
$today= date("Y-m-d");
$db = mysqli_connect("localhost", "root", "", "theatre");

        echo '<h4 class="text-white bg-dark text-center "> Here are all movies you have booked </h4><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Delete was successfull</h5>';
        }
    }  
  

$list="select b.Booking_id,b.Seat_no,b.Cost,b.Movie_id from booked b,movie m where b.User='$user'and b.Movie_id=m.Movie_id  and m.date>'$today'";
$result=mysqli_query($db,$list);
?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                      <th scope="col">Movie</th>
                        <th scope="col">Seat no</th>
                        <th scope="col">Cost</th>
                        
                        <th class="table-danger" scope="col"> </th>
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                   $id=$row['Movie_id'];       

    $mov="select * from movie where Movie_id='$id' ";
    $res=mysqli_query($db,$mov);
    while($r = $res->fetch_assoc()) 
        $name=$r['Name'];       
                       
                       ?>
                <tbody>
                    <tr>
                    <form action='deleteBook.php' method='POST'>
                     <input name='booking_id' type="hidden" value="<?php echo $row["Booking_id"]; ?>"/>
                    <th scope='row'><?php echo $name?> </th>
                      <td ><?php echo $row["Seat_no"]; ?></td>
                      <td> <?php echo $row["Cost"];?></td>
                      <td class='table-danger'><button type='submit' name='Delete' class='btn btn-danger btn-sm'>Delete</button></td>
                          </form>
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>