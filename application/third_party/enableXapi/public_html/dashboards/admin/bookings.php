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

    <?php include "favicon.php";?>
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
          	<h3>Seminar Booking Stats</h3>
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
                                  <th>Seminar Price</th>
                                  <th>Seminar Facilitator</th>
                                  <th>Seminar Offering</th>
                                  <th>Bought Tickets</th>
                                  <th>View Ticket</th>
                              </tr>
                              </thead>
                              <tbody id="contentBox">
                              
                              
                              </tbody>
                          </table>
                        </div>
            </div>
          </div>
			

      <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style=";">
              <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">View Tickets</h4>
                  </div>
                  <div class="modal-body">
                        <table class="table">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Ticket Code</th>
                                  <th>Seminar Name</th>
                                  <th>Ticket Buyer</th>
                                  <th>Email</th>
                                  <th>Date Purchased</th>
                                  <th>Seminar Date</th>
                                  <th>Ticket Status</th>
                              </tr>
                              </thead>
                              <tbody id="contentContainer">
                              
                              
                              </tbody>
                          </table>
                  </div>
                  <div class="modal-footer">
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
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
              $("#spinner").fadeIn(500);
              $.ajax({
                type:"POST",
                url:"php core/events.php",
                data:new FormData(this),
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData:false, // To send DOMDocument or non processed data file it is set to false               
                success:function(data){
                  $("#spinner").fadeOut(500);
                alert(data);
                fetchSeminars();
                }
              });
            });

        $(document).on('click', '.close', function(){
          $(".overlay").fadeOut(500);
        });
        fetchSeminars();
        function fetchSeminars(){
        var action = "fetchSeminar";
        $.ajax({
                type:"POST",
                url:"php core/ticket.php",
                data:{action:action},
                success:function(data){
                  $('#contentBox').html(data);
                }
              });
      }
          

           $(document).on('click', '.viewSeminar', function(e){
              var action = "fetchTickets";
              var seminarID = $(this).data("id");
              $.ajax({
                  type:"POST",
                  url:"php core/ticket.php",
                  data:{action:action, seminarID:seminarID},
                  success:function(data){
                    $('#contentContainer').html(data);
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
