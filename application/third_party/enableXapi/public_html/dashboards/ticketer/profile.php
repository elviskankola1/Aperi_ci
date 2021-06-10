<?php
session_start();
include "../../connectDB.php";
$ErrorMessage = "";

if(isset($_SESSION['adminID']) && isset($_SESSION['adminName']) && isset($_SESSION['adminPhoto'])){
      
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Ngoma Ngomacommunicatins - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <?php
        include "header.php";
     ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
            <section id="main-content">
          <section class="wrapper site-min-height" style="background-color:white;">

          <div class="row mt" >
              <?php 
              $sql = "SELECT * FROM ngomaAdmin WHERE adminID='".$_SESSION['adminID']."'";
            $result = mysqli_query($con, $sql);
            $queryResult = mysqli_num_rows($result);
            if($queryResult > 0 ){
                $i ="";
                $profileDP ="";

              while ($row = mysqli_fetch_array($result)){
                  if($row['adminPhoto'] == ''){
                        $profileDP = '<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"  class="img-circle dp" alt="avatar" style="height:150px; width:150px; object-fit:cover;">';
                    }else{
                        $profileDP = '<img src="../../images/profiles/'.$row['adminPhoto'].'" class="img-circle dp" alt="avatar" style="height:150px; width:150px; object-fit:cover;">';
                    }
                ?>
                <div class="col-lg-12 col-md-6 col-sm-12" >
                  <div class="container bootstrap snippet">
                  <div class="row">
                    <div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                      <?php echo $profileDP; ?><br>
                       
                      <form class="submitForm sendForm" method="Post" enctype="multipart/formData">
                        <label for="imginput" style="font-size: 30px; margin-top:-60px; padding: 10px 15px; border-radius:50%; background-color: white;"><i class="fa fa-camera"></i></label> 
                        <input type="hidden" name="action" value="updateDP">
                        <input type="hidden" name="previousDP" value="<?php echo $row['adminPhoto']; ?>">
                        <input type="file" id="imginput" name="file" class="text-center center-block file-upload" style="display:none;" required />
                      </form>
                    </div><hr><br>
                  </div><!--/col-3-->
                    <div class="col-sm-9">              
                        <div class="tab-content">
                          <div class="tab-pane active" id="home">
                              <hr>
                                <form class="form submitForm" method="post">
                                    <div class="form-group">
                                        
                                        <div class="col-xs-6">
                                            <label for="first_name"><h4>Full Name</h4></label>
                                            <input type="text" class="form-control" name="fullName" value="<?php echo $row['adminName']; ?>" placeholder="first name" title="enter your first name if any." required />
                                        </div>
                                    </div>
                        
                                    <div class="form-group">
                                        
                                        <div class="col-xs-6">
                                            <label for="phone"><h4>Phone</h4></label>
                                            <input type="tel" class="form-control" name="phone" value="<?php echo $row['adminContact']; ?>" placeholder="enter phone" title="enter your phone number if any." required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="col-xs-12">
                                            <label for="email"><h4>Email</h4></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $row['adminEmail']; ?>" placeholder="you@email.com" title="enter your email." required />
                                            <input type="hidden" name="action" value="adminDetails" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-xs-12">
                                            <label for="email"><h4>Bio</h4></label>
                                            <textarea class="form-control" rows="3"  name="adminBio" placeholder="Please enter your bio" required ><?php echo $row['adminAbout']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <div class="col-xs-12">
                                              <br>
                                              <button class="btn  btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                              <div class="spinner-border" id="spinner" style="display:none;"></div>
                                          </div>
                                    </div>


                              </form>
                            
                            <hr>
                                  <a href="#demo" class="btn btn-lg  btn-default" data-toggle="collapse" style="margin-top:30px; width:100%;" >Update Password</a>
                                  <div id="demo" class="collapse">
                                   <form class="submitForm form" method="post">
                                      <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password"><h4>Password</h4></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." required />
                                            <input type="hidden" name="action" value="updatePassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                          <label for="password2"><h4>Verify</h4></label>
                                            <input type="password" class="form-control" name="password2" id="password2" title="enter your password2." required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <div class="col-xs-12">
                                              <br>
                                              <button class="btn  btn-info" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                          </div>
                                    </div>
                                   </form>
                                  </div>
                           </div><!--/tab-pane-->
                            </div><!--/tab-pane-->
                        </div><!--/tab-content-->

                      </div><!--/col-9-->
                  </div><!--/row-->       
                </div>

                <?php
                }

              }
                ?>

            
          </div>



    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <?php echo date("Y"); ?> - Ngoma Communications
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script>
      $(document).ready(function(){
        $(document).on('submit', '.submitForm', function(e){
              e.preventDefault();
              $("#spinner").fadeIn(500);
              $.ajax({
                type:"POST",
                url:"php core/profile.php",
                data:new FormData(this),
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData:false, // To send DOMDocument or non processed data file it is set to false               
                success:function(data){
                  $("#spinner").fadeOut(500);
                alert(data);
                fetchFacilitators();
                }
              });
            });
           var readURL = function(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      $('.dp').attr('src', e.target.result);
                      $('.sendForm').trigger('submit');
                  }
          
                  reader.readAsDataURL(input.files[0]);
              }
          }
          

          $(".file-upload").on('change', function(){
              readURL(this);
          });

        });
  </script>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->


  </body>
</html>
<?php
}else{
  echo"<script>alert('please login first');</script>"; 
  echo"<script>window.location='index.php';</script>";
}

?>