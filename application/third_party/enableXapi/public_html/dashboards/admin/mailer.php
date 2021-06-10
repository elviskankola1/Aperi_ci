<?php
session_start();
include "../../connectDB.php";
$ErrorMessage = "";

if(isset($_SESSION['adminID']) && isset($_SESSION['adminName']) && isset($_SESSION['adminPhoto'])){

   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "favicon.php";?>
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


            <section id="main-content" style=" background-color: white; ">
          <section class="wrapper site-min-height">
          <div class="row mt" >
                <div class="col-md-6 col-sm-12 col-lg-7" style=" background-color: white; margin:0% auto; float:none;" >
                  <h3>Mailer</h3><br>
                  <p class="lead">To send an email please fill in the details below and tap/click the '<strong>Send Email</strong>' button.<div></div></p>

                  <script language="Javascript"> 
                  document.write("Welcome to our visitors from "+geoplugin_city()+", "+geoplugin_countryName()); 
                  </script>
                   <form class="submitForm" enctype="multipart/form-data" >

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Full Name of your contact*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Please enter  full name *" required="required" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Organisation Name*</label>
                                    <input type="text" name="organisation" class="form-control" placeholder="Please enter organisation name*" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Organisation's Email*</label>
                                    <input type="email" name="email" class="form-control" placeholder="Please enter  email *" required="required">
                                    <input type="hidden" name="action" value="emailBlaster" />
                                </div>
                            </div>
                            
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Organisation's Telephone</label>
                                    <input type="text" name="telephone" class="form-control" placeholder="Please enter telephone*" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Organisation's Suburb*</label>
                                    <input type="text" name="suburb" class="form-control" placeholder="Please enter suburb name*" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Attachment*</label>
                                    <input type="file" name="file"  class="btn btn-success" required="required" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message*</label>
                                    <textarea id="form_message" name="message" class="form-control" rows="13" placeholder="Enter your message*" rows="4" required="required" ></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-send btn-block btn-lg" value="Send Email">
                                <div class="spinner-border" id="spinner" style="display:none;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>

                </form>

                </div>

            
            
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
                url:"php core/mailer.php",
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php
}else{
  echo"<script>alert('please login first');</script>"; 
  echo"<script>window.location='index.php';</script>";
}

?>