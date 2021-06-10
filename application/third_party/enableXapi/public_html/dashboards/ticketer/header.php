 <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="http://wwww.ngomacommunications.com" class="logo"><b>Ngoma Communications </b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="../../images/profiles/<?php echo $_SESSION['adminPhoto']; ?>" class="img-circle" style="width:60px; height:60px; object-fit: cover;" ></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['adminName']; ?></h5>
              	  	

                    <li class="mt">
                      <a href="profile.php">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                     <li class="">
                      <a href="index.php">
                          <i class="fa fa-inbox"></i>
                          <span>Scanner</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>