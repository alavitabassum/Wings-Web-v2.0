<?php
require_once 'db.php';
get_menus();
display_menu();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dynamic Navigation Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
     
        <div class="form-wrapper newForm">
         <h3>Add list item</h3>
            <form action="add_menu.php" method="post">
                <input type="text" name="menu_title" placeholder="Type menu item name">
                <input type="text" name="menu_page" placeholder="Location link (optional)">
                <select name="menu_id">
                <option value="">Select a parent menu (optional)</option>
                <?= get_parent_menus()  ?>
                </select>
                <input type="submit" name="submit" value="Add Menu Item">
            </form>
        </div>
        <div class="form-wrapper newForm">
         <h3>Delete menu item</h3>
            <form action="delete_menu.php" method="post">
            <select name="menu_id">
                <option value="">Select a menu item to delete</option>
                <?= get_all_menus()  ?>
                </select>
                <input type="submit" name="submit" value="Delete Menu Item">
            </form>
        </div>
        
    </div>
</body>
</html>