
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

        <?php include 'ad_modal.php';?>

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
          <div class="clearfix"></div>
          <div class="row top_tiles top-row">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" onmouseover="hovereffect()" onmouseout="noHover()">
              <div class="tile-stats top-tiles first-tile" id="first">
                <div class="icon">
                  <img class="icon-first-tile" id="BigBox" src="images/package.png" />
                  <img class="small-icons" id="smallBox" src="images/box.png" />
                  <script>
                    function hovereffect() {
                      var x = document.getElementById("BigBox");
                      var y = document.getElementById("smallBox");
                      x.style.display = "none";
                      y.style.display = "block";
                    }

                    function noHover() {
                      var x = document.getElementById("BigBox");
                      var y = document.getElementById("smallBox");
                      x.style.display = "block";
                      y.style.display = "none";
                    }
                  </script>
                </div>
                <p>Delivered</p>
                <div class="count">179</div>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles second-tile">
                <div class="icon">
                  <img class="small-icons" src="images/Delivery.png" />
                </div>
                <p>On the way</p>
                <div class="count">179</div>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles third-tile">
                <div class="icon">
                  <img class="small-icons" src="images/Exchange.png" />
                </div>
                <p>Exchange</p>
                <div class="count">179</div>


              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats top-tiles fourth-tile">
                <div class="icon">
                  <img class="small-icons" src="images/Return.png" />
                </div>
                <p>Returned</p>
                <div class="count">179</div>
              </div>
            </div>
          </div>
          <!-- Reports Tiles-->
          <div class="clearfix"></div>
          <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Delivered Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Cancelled Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Exchange Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Return Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last Week</p>
                <h3>Client Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Resource Routes</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Performance Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats report-tiles">
                <p class="report-time">Last 24 hours</p>
                <h3>Bank Reports</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
                <a href="">Click to view report </a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- /page content -->


    </div>
  </div>
<?php include 'footer_script_tags.php'?>
