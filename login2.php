
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
  <style>
  @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(e.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4682B4;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4682B4;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4682b4;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
a:link, a:visited {
  
  color: blue;

  text-align: center;
 
}

a:hover {
  color: darkblue;
}
::-webkit-input-placeholder { /* WebKit browsers */
    color: white;
     opacity: 0.8 ;
}
h4{
    padding: 20px;
  align-content: center;

}   
</style>
<script type="text/javascript" >

  function Validate() {
  var username = document.forms['vform']['S_username'];
  var password = document.forms['vform']['S_password'];
  var username_error = document.getElementById('username_error');
  var password_error = document.getElementById('password_error');

    // validate username
    if (username.value== "") {
      username.style.border = "1px solid red";
      document.getElementById('username_div').style.color = "red";
      document.getElementById('username_error').style.fontSize = "19px";
      username_error.textContent = " **Username is required";
      username.focus();
      return false;
    }

    // validate username
    if (username.value.length < 3) {
      username.style.border = "1px solid red";
      document.getElementById('username_div').style.color = "red";
      document.getElementById('username_error').style.fontSize = "19px";
      username_error.textContent = "**Username must be atleast three charcters";
      username.focus();
      return false;
    }
  
  
    if (password.value == "") {     
      password.style.border = "1px solid red";
      document.getElementById('password_div').style.color = "red";
      document.getElementById('password_error').style.fontSize = "19px";
      password_error.textContent = "**Password is required";
      password.focus();
      return false;
    }  }
   
  </script>
<title> Login</title>
</head>
<body>
    <?php
    if(isset($_GET['login'])) {   
           if($_GET['login'] == "fail"){ 
            echo '<h4 class="bg-success text-center" align="center" >Invalid username or password !!</h4>';
        }
        }
        ?>
  <form action="Login.php" method="post" enctype="multipart/form-data" align="center" onsubmit="return Validate()" name="vform">
<div class="login-box">
  <h1>Login</h1>
 
    <div class="textbox" id="username_div" >
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="S_username">
    <div id="username_error"></div>
  </div>
  

    <div class="textbox" id="password_div" >
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="S_password">
    <div id="password_error"></div>
  </div>

  <input type="submit" class="btn" value="Sign in">
  <hr>
  
<br><br><a  href="register.html" >No account? Register here</a>
</div>
</form>
  </body>
</html>
