<?php
session_start();
include "../../connectDB.php";
$ErrorMessage = "";
if(isset($_SESSION['employeeID']) && isset($_SESSION['employeeName']) && isset($_SESSION['employeeImg'])){

?>
<!DOCTYPE html>
<html>
<head>
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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 <?php
include "header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account Manager</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">
            <div class="card">
              
              <div class="card-body">
                <div class="tab-content">
                  
                  <form class="form-horizontal submitForm" >
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="inputName" name="fullName" placeholder="Full Name" required>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-12">
                          <input type="email" class="form-control" id="inputEmail" name="employeeEmai1" placeholder="Email" required>
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-12">
                          <input type="tel" class="form-control" id="inputPhone" name="phoneNumber" placeholder="Phone" required>
                        </div>
                      </div>
					  <input type="hidden" name="action" value="updateDetails" />
					  
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Alt Phone</label>

                        <div class="col-sm-12">
                          <input type="tel" class="form-control" id="inputAltPhone" name="alternativePhone" placeholder="Alternative Phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Location</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="location" name="location" placeholder="City/Town">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label" >Bio</label>

                        <div class="col-sm-12">
                          <textarea class="form-control" id="inputBio" name="Bio" placeholder="Bio/About" required></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
			  
			  
			  <div class="card">
				<div class="card-body">
                <div class="tab-content">
                  <form class="form-horizontal updatePassword " >
					<h5 class="text-center">Nouveau mot de passe</h5>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-12 control-label">Mot de passe</label>
                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-12 control-label">vérifier le mot de passe</label>
                        <div class="row">
                        <div class="col-sm-12">
							<input type="hidden" name="action" value="updatePassword" />
                          <input type="password" class="form-control" id="password2" name="password2" placeholder="vérifier le mot de passe" required>
                        </div>
                        </div>
                      </div>
					  <div class="form-group">
                        <div class="row">
                        <div class="col-sm-12">
                         <p class="text-center" id="spinner" style="color:#dc3545;"></p>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Actualiser</button>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "footer.php";
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
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
</script>
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
<?php
}else{
	echo "<script>alert('Please Login first');</script>";
	echo "<script>window.location ='index.php'; </script>";
}
?>