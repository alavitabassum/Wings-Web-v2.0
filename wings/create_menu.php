
<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:index.php?lmsg=true');
    exit;
}

require_once 'db.php';
//get_menus();
//display_menu();
include 'header_general.php';
include 'sidebar.php';
include 'top_nav.php';

?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Menu Management</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">





                        <div class="form-wrapper">
                          <h3>Add list item</h3>
                              <form action="add_menu.php" method="post">
                                  <input type="text" name="menu_title" placeholder="Type menu item name">
                                  <input type="text" name="menu_page" placeholder="Location link (optional)">
                                  <select name="menu_id">
                                  <option value="">Select a parent menu (optional)</option>
                                  <?=get_all_menus()?>
                                  </select>
                                 
                                  <input type="submit" name="submit" value="Add Menu Item">
                              </form>
                        </div>

                    <div class="form-wrapper">
                      <h3>Delete menu item</h3>
                          <form action="delete_menu.php" method="post">
                          <select name="menu_id">
                              <option value="">Select a menu item to delete</option>
                              <?=get_all_menus()?>
                              </select>
                              <input type="submit" name="submit" value="Delete Menu Item">
                          </form>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
    </div>
  </div>

  <?php include 'footer_script_tags.php'?>
