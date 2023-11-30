<?php 
    if(isset($_GET['state']) && $_GET['state'] == 'shipped'){
        $id_order = $_GET['id'];
        shipped_order($id_order);
        header('location: index.php?act=order');
    }elseif(isset($_GET['id'])){
        $id_order = $_GET['id'];
        confirm_order($id_order);
        header('location: index.php?act=order');
    }
