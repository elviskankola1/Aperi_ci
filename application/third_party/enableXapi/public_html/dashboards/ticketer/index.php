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
          <section class="wrapper site-min-height">
            <h3>Upcoming Seminars</h3>
            <div class="row mt">
            <div class="col-lg-12 col-md-6 col-sm-12" >
            
           <div class="content-panel" style="background-color:white;">
                            <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Seminar Photo</th>
                                  <th>Seminar Name</th>
                                  <th>Seminar Date</th>
                                  <th>Seminar Facilitator</th>
                                   <th>Seminar Status</th>
                                  <th>Log In</th>
                              </tr>
                              </thead>
                              <tbody id="contentBox">
                              
                              
                              </tbody>
                          </table>
                        </div>
            </div>
          </div>
      

      <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style=";">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Create Seminar</h4>
                  </div>
                  <div class="modal-body">
                        
                  </div>
                  <div class="modal-footer">
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
                  </div>
                </div>
              </div>
      </div>

      <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style=";">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Log in seminar</h4>
                  </div>
                 <div class="modal-body">
                       <form class="submitForm" method="post">
                        <div class="form-group">
                        <label for="first_name">Please enter the seminar password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password ">
                        <input type="hidden" class="form-control" id="seminarID" name="seminarID">
                        <input type="hidden" class="form-control" id="action" name="action" value="login">
                        </div>
                        <button type="submit" class="btn btn-primary">Start ticketing</button>
                        <div class="spinner-border" id="spinner" style="display:none;"></div>

                        <BR>
                        <h4 style="text-align: center; color:red;" id="formResults"></h4>
                      </form>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
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
          if($('#password').val() !='' ){          
              $("#spinner").fadeIn(500);
              $.ajax({
                type:"POST",
                url:"php core/action.php",
                data:new FormData(this),
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData:false, // To send DOMDocument or non processed data file it is set to false               
                success:function(data){
                  $("#spinner").fadeOut(500);
                    if(data =="isset"){
                      window.location='scanner.php';
                    }else{
                      $('#formResults').html(data);
                    }
                }
              });
            }else{
              $('#formResults').html("Please enter your password");
            }
        });


        $(document).on('click', '.close', function(){
          $(".overlay").fadeOut(500);
        });

        $(document).on('click', '.getSeminar', function(){
          var id = $(this).data("id");
          $('#seminarID').val(id);
        });

        fetchSeminars();
        function fetchSeminars(){
        var action = "fetchSeminars";
        $.ajax({
                type:"POST",
                url:"php core/events.php",
                data:{action:action},
                success:function(data){
                  $('#contentBox').html(data);
                }
              });
      }
          


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


function getFacilitator($con){
  $sql = "SELECT * FROM ngomaFacilitators WHERE  type='1' ";
  $data =  "";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);  
  if($queryResult > 0 ){
  while ($row = mysqli_fetch_array($result)){
    $data .= '<option value="'.$row['facilitatorID'].'">'.$row['facilitatorName'].'</option>';
  }
  }else{
    $data .= '<option value="">No facilitator found</option>';
  }
  return $data;
}
?>