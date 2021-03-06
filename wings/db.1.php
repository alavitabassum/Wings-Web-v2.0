<?php

    define("HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
    define("DB_NAME","cms");
    
    $connection = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$connection)
	{
		die(mysqli_error());
    }
    
    
function getUserAccessRoleByID($id)
{
    global $connection;

    $query = "SELECT `user_role` FROM `tbl_user_role` WHERE  `id` = ".$id;
    $rs = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($rs);

    return $row['user_role'];
}
 

function debug($arg)
{
    echo '<pre>';
    print_r($arg);
    echo '<pre>';
    exit;
}


function show_menu($id)
{

    global $connection;

    $menus = '';
    $menus .= generate_multilevel_menus($connection);
    
 

    return $menus;

}

function generate_multilevel_menus($connection, $menu_id = null)
{
    $menu = '';
    $sql = '';
   
    if (is_null($menu_id)) {
        $sql = "SELECT * FROM `menus` WHERE `menu_id` IS NULL AND `user_role_id`=".$_SESSION['user_role_id'];
    } else {
        $sql = "SELECT * FROM `menus` WHERE `menu_id`=$menu_id AND `user_role_id`=".$_SESSION['user_role_id'];
    }

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        if ($row['page']) {
            if ($row['menu_id']) {
                $menu .= '  <li><a href="' . $row['page'] . '">' . $row['title'] . '</a>';
            } else {
                $menu .= '  <li><a href="' . $row['page'] . '">' . $row['title'] . '</a>';
            }

        } else {
            if ($row['menu_id']) {
                $menu .= '  <li><a href="#">' . $row['title'] . '<span class="fa fa-chevron-down"></span></a>';
            } else {
                $menu .= '  <li><a href="#">' . $row['title'] . '<span class="fa fa-chevron-down"></span></a>';
            }

        }
        $menu .= '<ul class="nav child_menu">' . generate_multilevel_menus($connection, $row['id']) . '</ul>';

        $menu .= '</li>';
    }
    return $menu;

}

function get_parent_menus()
{

    global $connection;

    $sql = "SELECT * FROM `menus` WHERE `menu_id` IS NULL";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result)) {

        $menu = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $menu .= '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';

        }
        //debug($menu);

        return $menu;
    }
}



function add_new_menu_item($menu)
{

    global $connection;

    $title = $menu['menu_title'];
    $page = $menu['menu_page'];
    $id = $menu['menu_id'];
    $user = $menu['user_role_id'];

    $sql = '';

    if (!empty($title) and !empty($page) and !empty($id) and !empty($user)) {
        $sql = "INSERT INTO `menus`( `title`, `menu_id`, `page`, `user_role_id`) VALUES ('$title',$id,'$page', '$user')";

    } else if (!empty($title) and !empty($page) and empty($id) and !empty($user)) {
        $sql = "INSERT INTO `menus`( `title`,`page`, `user_role_id`) VALUES ('$title','$page', '$user')";

    } else if (!empty($title) and empty($page) and !empty($id) and !empty($user)) {
        $sql = "INSERT INTO `menus`( `title`, `menu_id`, `user_role_id`) VALUES ('$title',$id, '$user')";

    } else if (!empty($title) and empty($page) and empty($id) and !empty($user)) {
        $sql = "INSERT INTO `menus`( `title`, `user_role_id`) VALUES ('$title', '$user')";
    }

    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        return true;

    }

    debug($user);
    //return false;
}



function assign_menu($menu)
{

    global $connection;
    $id = $menu['menu_id'];
    $user = $menu['user_role_id'];
    $menu_name = $menu['menu_id'];
    $user_name = $menu['user_role_id'];

    $sql = '';

    if (!empty($id) and !empty($user)) {
        $sql = "INSERT INTO `tbl_role_permission`(`menu_id`, `user_role_id`, `menu_title`,`user_role`) VALUES ('$id','$user','$menu_name','$user_name')";

    } 

    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        return true;

    }

    debug($user);
    //return false;
}


function get_assigned_menulist()
{

    global $connection;

    $sql = "SELECT * FROM `tbl_role_permission` ";
    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)){
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $menus = [];

        foreach ($rows AS $index=>$row){
  
                $id= $row['id'];
                $menus['menu_'.$id]=[
                    'id' => $row ['id'],
                    'menu_id'=> $row ['menu_id'],
                    'menu_title'=> $row ['menu_title'],
                    'user_role_id' => $row ['user_role_id'],
                    'user_role' => $row ['user_role'],
                ];
            
        }

    // debug( $menus );
    }
    return $menus;

}


function display_assigned_menulist(){
    $menus = get_assigned_menulist();
    
    if(!$menus){
        return 'No menu exists in database';
    }

   $html = '';
  

   foreach($menus AS $menu){
 
          

            $html .= '  <td class=" ">'.$menu['menu_id'].'</td>
            <td class=" ">'.$menu['user_role_id'].'</td><td class=" last">
            <button type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
              Delete
            </button>
          </td></tr>';

   }


   return $html;
}




function get_all_menus()
{

    global $connection;
    $sql = "SELECT * FROM `menus`";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result)) {

        $menu = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $menu .= '<option value="' . $row['id'] . $row['title'] . '">' . $row['title'] . '</option>';

        }
        //debug($menu);

        return $menu;
    }
}

function get_all_users()
{

    global $connection;
    $sql = "SELECT * FROM `tbl_user_role`";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result)) {

        $user = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $user .= '<option value="' . $row['id'] . '">' . $row['user_role'] . '</option>';

        }
        //debug($menu);

        return $user;
    }
}

function delete_menu_item($menu)
{
    global $connection;
    $id = $menu['menu_id'];
    $sql = "DELETE FROM `menus` WHERE  `id`= $id";

    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        return true;

    }
    return false;
}


