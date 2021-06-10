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
   


<section >
     
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">

        
        <div class="card">
        <div class="card-body">
                <div class="tab-content">
<form action="live/api/createRoom/webinar.php" method="POST"> 
            
           <?php 
           
                  if($_GET['room']){
                    echo "<div class='alert alert-success'>Virtual Room succesfully created! Please check your email for login details and students login details</div>";

                  }
                  ?>

          <h5 class="text-center">Create Online Meeting</h5>
                          <!--- CLASSNAME -->
                      <div class="form-group">
                        <label class="col-sm-12 control-label">Room Name</label>
                        <div class="col-sm-12">

                          <input type="text" name="roomName" class="form-control" placeholder="Name">
                          <input type="hidden" name="module" value="<?php echo $_GET['module']?>">

                        </div>
                      </div>
                         <!--- DATE SCHEDULE -->
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">Date</label>
                        <div class="row">
                        <div class="col-sm-12">
                        <input type="date" name="date" class="form-control">






                        </div>
                        </div>
                      </div>
                         <!--- START TIME SCHEDULE -->
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">Start Time</label>
                        <div class="row">
                        <div class="col-sm-12">
                        <input type="time" name="time" class="form-control">






                        </div>
                        </div>
                      </div>
                      <!--- END TIME SCHEDULE -->
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">End Time</label>
                        <div class="row">
                        <div class="col-sm-12">
                        <input type="time" name="end" class="form-control">


                        </div>
                        </div>
                      </div>
                         <!--- NUMBER OF PARTICIPANTS-->
                    
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">Event</label>
                        <div class="row">
                        <div class="col-sm-12">
                       <select class="form-control" name="event">
                         <?php 
                         $sql = "SELECT * FROM ngomaSeminars"; 
                         $query = mysqli_query($con,$sql);

                         while ($row = mysqli_fetch_array($query)){

                           echo "<option>".$row['seminarName']."</option>";


                         }

                         ?>
                       </select>


                        </div>
                        </div>
                      </div>
                


            <div class="form-group">
                        <div class="row">
                        <div class="col-sm-12">
                          <button class="btn btn-info">Create</button>
                         <p class="text-center" id="spinner" style="color:#dc3545;"></p>
                        </div>
                        </div>
                      </div>
                     
                    </form>
                     <a href="../live/"><button class="btn btn-info">Login on your virtual room!</button></a>
                  </div>
                  <!-- /.tab-pane -->
                </div>
        </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </section>



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
