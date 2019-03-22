
      <?php

session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:index.php?lmsg=true');
    exit;
}

require_once 'db.php';

include 'header_index.php';
include 'sidebar.php';
include 'top_nav.php';
?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;">
              <p class="top-note">Welcome
                <span>  <?php echo getUserAccessRoleByID($_SESSION['user_role_id']); ?> </span>
              </p>
            </div>
          </div>
        

          <div class="row top_tiles top-row">
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles second-tile">
                <div class="icon">
                  <img class="small-icons" src="images/cricket.png" />
                </div>
                <p>Cricket</p>
                <div class="count"></div>
              </div>
            </div>
            
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles third-tile">
                <div class="icon">
                  <img class="small-icons" src="images/football.png" />
                </div>
                <p>Futsal</p>
                <div class="count"></div>
              </div>
            </div>

            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles fourth-tile">
                <div class="icon">
                  <img class="small-icons" src="images/handball.png" />
                </div>
                <p>Tchoukball</p>
                <div class="count"></div>
              </div>
            </div>
          </div>

          <div class="row top_tiles top-row">
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles second-tile">
                <div class="icon">
                  <img class="small-icons" src="images/carrom.png" />
                </div>
                <p>Carrom</p>
                <div class="count"></div>
              </div>
            </div>
            
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles third-tile">
                <div class="icon">
                  <img class="small-icons" src="images/billiard.png" />
                </div>
                <p>Snooker</p>
                <div class="count"></div>
              </div>
            </div>

            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles fourth-tile">
                <div class="icon">
                  <img class="small-icons" src="images/table-tennis.png" />
                </div>
                <p>Table Tennis</p>
                <div class="count"></div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
      <!-- /page content -->


    </div>
  </div>
<?php include 'footer_script_tags.php'?>
