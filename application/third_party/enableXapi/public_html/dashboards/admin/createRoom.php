<?php
session_start();
include "connectDB.php";
//include "secure.php";
$ErrorMessage = "";


?>
<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body >
<div class="wrapper">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
   

          </div><!-- /.col -->
          <div class="col-md-6">
            
          
          </div>

         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- Button trigger modal -->

<section class="container">
     
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">

        
        <div class="card">
        <div class="card-body">
                <div class="tab-content">
<form action="live/api/createRoom/index.php" method="POST"> 
            
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

                        <!--  <input type="text" name="roomName" class="form-control" placeholder="Name">-->
                          <input type="hidden" name="module" value="<?php echo $_GET['module']?>">

                           <input type="text" name="roomName" class="form-control" required>

                        </div>
                      </div>
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">Event</label>
                        <div class="row">
                        <div class="col-sm-12">
                       <select class="form-control" name="event">
                         <?php 
                         $sql = "SELECT * FROM ngomaSeminars WHERE seminarCountry ='Online event'"; 
                         $query = mysqli_query($con,$sql);

                         while ($row = mysqli_fetch_array($query)){

                           echo "<option value=".$row['seminarID'].">".$row['seminarName']."</option>";


                         }

                         ?>
                       </select>


                        </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <label  class="col-sm-12 control-label">Facilitator</label>
                        <div class="row">
                        <div class="col-sm-12">
                       <select class="form-control" name="facilitator">
                         <?php 
                         $sql = "SELECT * FROM ngomaFacilitators"; 
                         $query = mysqli_query($con,$sql);

                         while ($row = mysqli_fetch_array($query)){

                           echo "<option value=".$row['facilitatorID'].">".$row['facilitatorName']."</option>";


                         }

                         ?>
                       </select>


                        </div>
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
                        <div class="row">
                        <div class="col-sm-12">
                          <button class="btn btn-info">Create</button>
                         <p class="text-center" id="spinner" style="color:#dc3545;"></p>
                        </div>
                        </div>
                      </div>
                     
                    </form>
                     
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


              </div>
              </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- <script>
  $(document).ready(function(){ 
  fetchAccount();
  function fetchAccount(){
    var action = "fetchAccount"; 
     $.ajax({
              type:"POST",
              url:"core/action.php",
        dataType:'json',
              data:{action:action},
             success:function(data){
         $("#inputName").val(data.Name);
        $("#inputEmail").val(data.Email);
        $("#inputPhone").val(data.Phone);
        $("#inputAltPhone").val(data.AltPhone);
        $("#location").val(data.location);
        $("#suburb").val(data.suburb);
        $("#inputBio").val(data.Bio);
              }
            });
  }
  

$(document).on('submit', '.submitForm', function(e){
    e.preventDefault();
    $("#spinner").fadeIn(500);
    $.ajax({
    type:"POST",
    url:"core/action.php",
    data:new FormData(this),
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData:false, // To send DOMDocument or non processed data file it is set to false               
    success:function(data){
      $("#spinner").fadeOut(500);
      alert(data);
      fetchAccount();
    }
    });
  });
  
  
  $(document).on('submit', '.updatePassword', function(e){
    e.preventDefault();
    $("#spinner").text("Loading ...");
    $.ajax({
    type:"POST",
    url:"core/action.php",
    data:new FormData(this),
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData:false, // To send DOMDocument or non processed data file it is set to false               
    success:function(data){
     $("#spinner").text(data);
    }
    });
  });
  
  
  
});
</script> -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>