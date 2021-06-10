<?php
include "connectDB.php";
$ErrorMessage = "";
session_start();
if(isset($_SESSION['email'])){
  echo"<script>window.location='_dash/index.php';</script>";
}else{
  if(isset($_POST['loginButton'])){
  $email = strtolower(strip_tags(mysqli_real_escape_string($con, $_POST['email'])));
  $password = strip_tags(mysqli_real_escape_string($con, $_POST['password']));
  $sql = "SELECT * FROM Users WHERE email ='".$email."' ";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);  
  if($queryResult > 0 ){
    while ($row = mysqli_fetch_array($result)){
      //$ErrorMessage = "<BR>". $row['email'] ." ".$row['code'];
        if($row['pass'] === $password){
          $_SESSION['profileImg'] = $row['profile_pic'];
          $_SESSION['name'] = $row['FirstName']." ".$row['LastName'];
          $_SESSION['user_id'] = $row['id'];
          echo"<script>window.location='_dash/index.php';</script>";

        }else{
          $ErrorMessage = 'Incorrect Password';
        }
    }
  }else{
    $ErrorMessage .= 'Incorrect  Email';
  } 
  

  }
  
} 
?>



<!DOCTYPE html>
<html>

<head>
  <?php include "favicon.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    body{          
      background:#27292c;
        }
        .login-dark {
      height:750px;
      background:#27292c;
      background-size:cover;
      position:relative;
}

.login-dark form {
  max-width:320px;
  width:90%;
  background-color:#44484c;
  padding:40px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:35%;
  left:50%;
  color:#fff;
  box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
  text-align:center;
  padding:15px 0 20px;
  font-size:100px;
  color:#69a104;
}

.login-dark form .form-control {
  background:none;
  border:none;
  border-bottom:1px solid #ccc;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
}

.login-dark form .btn-primary {
  background:#69a104;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, 
.login-dark form .btn-primary:active {
  background:#74c92a;
  outline:none;
}

.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#ccc;
  opacity:0.9;
  text-decoration:none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
}

.login-dark form .btn-primary:active {
  transform:translateY(1px);
}

.float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#0C9;
    color:#FFF;
    border-radius:50px;
    text-align:center;
}

.my-float{
    margin-top:22px;
}
</style>
</head>

<body>
    <div class="login-dark">
        <form method="post">
            <h2 style="text-align: center;">Login</h2>            
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password / OTP">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="loginButton" type="submit">Log In</button>
            </div>
            <p style="text-align: center;"><?php  echo $ErrorMessage ;  ?></p>
            <a  class="forgot" style="margin-top: 2%"></a>
        </form>



    </div>

    <footer>

        <a href="https://ngomacommunications.com/" class="float">
        <i class="fa fa-reply my-float"></i>
        </a>
  
     </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>