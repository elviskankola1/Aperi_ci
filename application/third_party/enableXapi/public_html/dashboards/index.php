<?php
session_start();
include "../connectDB.php";
$ErrorMessage = "";

if(isset($_SESSION['adminID']) && isset($_SESSION['adminName']) && isset($_SESSION['adminPhoto'])){
      if($_SESSION['accessLevel'] == 1){
       echo"<script>window.location='admin/events.php';</script>";
      }elseif($_SESSION['accessLevel'] == 2){
        echo"<script>window.location='mini/';</script>";
      }elseif($_SESSION['accessLevel'] == 3){
        echo"<script>window.location='mailer/';</script>";
      }elseif($_SESSION['accessLevel'] == 4){
        echo"<script>window.location='ticketer/';</script>";
      }
   
}else{
  if(isset($_POST['login'])){
  $email = secure_input(mysqli_real_escape_string($con, $_POST['email']));
  $password = secure_input(mysqli_real_escape_string($con, $_POST['password']));

  if($email !=''){
        if($password !=''){

                $sql = "SELECT * FROM ngomaAdmin WHERE  adminEmail = '".$email."'";
                $result = mysqli_query($con, $sql);
                if(!$result){
                  echo mysqli_error($con);
                }
                $queryResult = mysqli_num_rows($result);  
                if($queryResult > 0 ){
                  while ($row = mysqli_fetch_array($result)){
                      if(password_verify($password, $row['adminPassword'])){
                              $_SESSION['adminName'] = $row['adminName'];
                              $_SESSION['adminID'] = $row['adminID'];
                              $_SESSION['adminEmail'] = $row['adminEmail'];
                              $_SESSION['adminPhoto'] = $row['adminPhoto'];
                              $_SESSION['accessLevel'] = $row['accessLevel'];

                              if($_SESSION['accessLevel'] == 1){
                               echo"<script>window.location='admin/events.php';</script>";
                              }elseif($_SESSION['accessLevel'] == 2){
                                echo"<script>window.location='mini/';</script>";
                              }elseif($_SESSION['accessLevel'] == 3){
                                echo"<script>window.location='mailer/';</script>";
                              }elseif($_SESSION['accessLevel'] == 4){
                                echo"<script>window.location='ticketer/';</script>";
                              }
                      }else{
                        $ErrorMessage = 'Incorrect Password';
                      }
                      
                  }
                }else{
                  $ErrorMessage .= 'Wrong Email';
                } 
        }else{
            $ErrorMessage .= 'Please Enter your Password';
        }
  }else{
      $ErrorMessage .= 'Please Enter your Email';
  }
  
  

  }
  
} 

function secure_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <link rel="apple-touch-icon" sizes="57x57" href="../favs/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favs/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favs/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favs/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favs/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favs/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favs/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favs/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../favs/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favs/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favs/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favs/favicon-16x16.png">
<link rel="manifest" href="../favs/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favs/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Ngoma Digitech, Ngoma">

    <title>Ngoma Communications</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

   
    <div id="login-page">
      <div class="container">
      
          <form class="form-login" method="Post">
            <h2 class="form-login-heading">sign in</h2>
            <div class="login-wrap">
                <input type="email" class="form-control" name="email" placeholder="Email Address" autofocus required>
                <br>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
    
                    </span>
                </label>
                <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> Log In</button>
                <hr>
                
                <div class="login-social-link centered">
                <p style="color:red;"><?php echo $ErrorMessage; ?></p>
                </div>

                 <a style="text-align: center !important;" href="../../index.php">Go Home</a>
            </div>
    
             
    
          </form>     
      
      </div>
    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("https://cdn.pixabay.com/photo/2018/01/31/17/21/railway-line-3121544_960_720.jpg", {speed: 500});
    </script>


  </body>
</html>
