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
    <meta name="keyword" content="">

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
            <h3>Add users </h3><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:20px;">Add users </button>

          <div class="row mt">

                <div class="col-lg-12 col-md-6 col-sm-12" >
            
               <div class="content-panel" style="background-color:white;">
                                <hr>
                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th>#</th>
                                       <th>User Photo</th>
                                      <th>User Name</th>
                                      <th>User Email</th>
                                      <th>User Phone</th>
                                      <th>User type</th>
                                      <th>User Luwe</th>
                                      <th>View/Edit</th>
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                    <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
                  </div>
                   <form class="submitForm">
                  <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Add Name</label>
                               <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Admin Email</label>
                             <input type="email" id="email" name="email" class="form-control" required>
                             <input type="hidden" name="action" value="addUsers">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Admin Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Access Level</label>
                             <select id="email" name="level" class="form-control" required>
                               <option value>Select Access Level</option>
                               <option value="2">Min Admin level</option>
                               <option value="3">Mailer</option>
                               <option value="4">Ticket Facilitator</option>
                             </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="file" >Please Upload profile picture</label>
                              <input type="file" name="file" id="file" required>
                            </div>
                           </div>
                        </div>
                        <div class="form-group">
                          <label for="comment">Description / Profile</label>
                          <textarea class="form-control" name="description" rows="5" id="comment" required></textarea>
                        </div> 
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add user</button>
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
                  </div>
                  </form>
                </div>
              </div>
            </div>

      <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style=";">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                    <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
                  </div>
                   <form class="submitForm">
                  <div class="modal-body" id="editUserstable">
                        
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
                  </div>
                  </form>
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
                url:"php core/users.php",
                data:new FormData(this),
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData:false, // To send DOMDocument or non processed data file it is set to false               
                success:function(data){
                  $("#spinner").fadeOut(500);
                alert(data);
                fetchUsers();
                }
              });
            });

        $(document).on('click', '.close', function(){
          $(".overlay").fadeOut(500);
        });
        fetchUsers();
        function fetchUsers(){
        var action = "fetchUsers";
        $.ajax({
                type:"POST",
                url:"php core/users.php",
                data:{action:action},
                success:function(data){
                  $('#contentBox').html(data);
                }
              });
      }
          
    $(document).on('click', '.editAdmin', function(){
              var val = $(this).data('id');
              var action = "fetchEditForm";
               $.ajax({
                    type:"POST",
                    url:"php core/users.php",
                    data:{action:action, val:val},
                    success:function(data){
                      $('#editUserstable').html(data);
                    }
                  });
            });

        $(document).on('click', '.deleteUser', function(){
              var val = $(this).data('id');
              var action = "deleteAdmin";
              var img = $(this).data('img');
              var query = confirm("Are you sure you want to delete this user");
               if (query == true) {
               $.ajax({
                    type:"POST",
                    url:"php core/users.php",
                    data:{action:action, val:val, img:img},
                    success:function(data){
                      alert(data);
                      fetchUsers();
                    }
                  });
           }
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