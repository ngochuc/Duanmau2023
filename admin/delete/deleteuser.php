<?php 
    if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        delete_user($id);
        header('location: index.php?act=user');
    }