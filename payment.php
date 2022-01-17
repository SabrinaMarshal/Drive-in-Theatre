<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login2.php');
$db = mysqli_connect("localhost", "root", "", "theatre");
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
  font-family: Arial;
  font-size: 17px;
  padding: 0px;
}

* {
  box-sizing: border-box;
}




.col-25,
.col-50,
.col-75 {
  padding: 0 1px;
}

.container {
  background-color: #f2f2f2;
  padding: 10px 20px 15px 20px;
  border-left: 100px solid white;
  border-right: 100px solid white;
  border-radius: 8px;

}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:#4682B4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #4682B4;
}



</style>
</head>
<body>

    <div class="container">
      <form action="payment2.php" method="post">
    
          <div class="col-50">
            <h3>Payment</h3>
			<h3>You are booking <?php echo $_SESSION['count']?> seat(s) for &#8377;<?php echo $_SESSION['sum'];?></h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John  Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="October" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2020" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          <input type="submit" value="Pay now" class="btn">
        </div>
        
        
      </form>
   
</body>
</html>
