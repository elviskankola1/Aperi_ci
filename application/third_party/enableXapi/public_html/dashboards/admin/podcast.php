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
    <meta name="keyword" content="Ngomacommunications">

    <title>Ngoma Ngomacommunications - Dashboard</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>

  <body>

  <section id="container" >

     <?php
        include "header.php";
     ?>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3> PodCasts</h3><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:20px;">Create  </button>
          	<div class="row mt">
            <div class="col-lg-12 col-md-6 col-sm-12" >
            
           <div class="content-panel" style="background-color:white;">
                            <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Type</th>
                                  <th>File</th>
                                  <th>Title</th>
                                  <th>Author</th>                                
                                  <th>Offering</th>
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Create Podcast</h4>
                  </div>
                  <form class="submitForm" enctype="multipart/form-data">
                  <div class="modal-body">
                        <div class="row">
                           <div class="col-sm-6">
                            <div class="form-group">
                              <label> Type</label>
                                <select class="form-control" name="podcastType" required>   
                                  
                                  <option value="2">Video</option>
                                  </select>
                            </div>
                           </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Podcast Title</label>
                              <input type="text" class="form-control" name="Title" required>
                              <input type="hidden" name="createPodcast" value="12">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Author</label>
<select class="form-control" name="author">  
                              <?php
                              $sql = mysqli_query($con,"SELECT * FROM ngomaFacilitators");
                              while ($roll= mysqli_fetch_array($sql)) { ?>
                                <option value="<?=$roll['facilitatorID']?>"><?=$roll['facilitatorName']?></option>
                                
                             <?php }

                              ?>
                                 
                                
                              </select>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <div class="form-group">
                              <label>Podcast Offering</label>
                              <select class="form-control" name="podcastOffering" required>   
                                <option value="Leading Yourself"> Leading Yourself</option>
                                <option value="Leading People"> Leading People</option>
                                <option value="Leading Organisations"> Leading Organisations</option>
                                <option value="Life Skills"> Life Skills</option>
                                <option value="Thusa Life Skills"> Thusa Life Skills</option>
                              </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" required>
                            </div>
                           </div> 
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Video or Audio  File</label>
                                <input type="file" class="form-control" name="file" required>
                            </div>
                           </div>                 
                        </div>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create Seminar</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit PodCast</h4>
                  </div>
                  <form class="updateForm formHost" enctype="multipart/form-data">
                  
                  </form>
                </div>
              </div>
            </div>
		</section>
      </section>
      <footer class="site-footer">
          <div class="text-center" style="height: 2rem">
              <?php echo date("Y"); ?> - Ngoma Communications
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>



    <script src="../assets/js/jquery.js"></script>

    <script>
      $(document).ready(function(){
        $(document).on('submit', '.submitForm', function(e){
              e.preventDefault();
              var action = "createPodcast";
              $.ajax({
                type:"POST",
                url:"php core/createPodcast.php",
                data:new FormData(this),
                contentType: false, 
                cache: false, 
                processData:false,             
                success:function(data){
                 alert(data);
              
                }
              });
            });


         $(document).on('submit', '.updateForm', function(e){
              e.preventDefault();
              $.ajax({
                type:"POST",
                url:"php core/podcast.php",
                data:new FormData(this),
                contentType: false, 
                cache: false, 
                processData:false,             
                success:function(data){
                 alert(data);
                fetchPodcast();
                }
              });
            });




        $(document).on('click', '.close', function(){
          $(".overlay").fadeOut(500);
        });
        fetchPodcast();
        function fetchPodcast(){
        var action = "fetchSeminar";
        $.ajax({
                type:"POST",
                url:"php core/podcast.php",
                data:{action:action},
                success:function(data){
                  $('#contentBox').html(data);
                }
              });
      }
          
           $(document).on('click', '.editSeminar', function(){
          var val = $(this).data("id");
          // alert(val);
          var action = "fetchEditPodcast";
          $.ajax({
                type:"POST",
                url:"php core/podcast.php",
                data:{action:action, val:val},
                success:function(data){
                  $('.formHost').html(data);
                  fetchPodcast();
                }
              });
        });


         $(document).on('click', '.deleteSeminar', function(){
          var val = $(this).data("id");
          var img = $(this).data("img");
          var action = "deletePodcast";
          var query = confirm("Are you sure you want to delete this programme");
           if (query == true) {
          $.ajax({
                type:"POST",
                url:"php core/podcast.php",
                data:{action:action, val:val, img:img},
                success:function(data){
                  $("#spinner").fadeOut(500);
                  alert(data);
                  fetchPodcast();
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
    <script src="../assets/js/common-scripts.js"></script>

    
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