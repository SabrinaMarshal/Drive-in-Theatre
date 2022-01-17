<!DOCTYPE  HTML>
<html>
    <head>  <title>New Theatre </title>
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

    </head>
    <div class="topnav">
    <a class="active"  href="newTheatre.php">New Theatre</a>
    <a  href="newMovie.php">New movie</a>
  <a  href="all_theatres.php">View All Theatres</a>
  <a href="all_movies.php">View all Movies</a>
  <a  href="view_feedback.php">View Feedback</a>
  <div class="topnav-right">
    
    <a href="logout.php">Logout</a>
  </div>
</div>
    <?php
   
   if(isset($_GET['theatre'])) {   
          if($_GET['theatre'] == "success")
           echo '<h4 class="bg-success text-center" align="center" >New theatre  was successfully added!</h4>';
       
       }
       ?>
    
    <body>
      <h3> New Theatre</h3>
    <div class="wrap">
     
    
    <form  method="post" action="theatre.php"  enctype="multipart/form-data" >
      <div class="form-group">
      <label>Theatre Name</label>
          <input type="text" class="form-control" name="thea_name" placeholder="Theatre Name" required="required">
          <small class="form-text text-muted">Theatre name must be 2-20 characters long</small>
      </div>

      <div class="form-group">
        <label>City</label>
            <input type="text" class="form-control" name="city" placeholder="City" required="required">
            <small class="form-text text-muted">City must be 2-20 characters long</small>
        </div>

        <div class="form-group">
            <label>Phone </label>
                <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                <small class="form-text text-muted">Phone must be 2-20 characters long</small>
            </div>

         <div class="form-group">
            <label>Address </label>
                <input type="text" class="form-control" name="address" placeholder="Address" required="required">
                <small class="form-text text-muted">Address must be 2-20 characters long</small>
            </div>
                 

      <div class="form-group">
      <label for="pic">Upload Pictures</label>
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
