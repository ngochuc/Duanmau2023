<?php
    session_start();
    include '../../modal/pdo.php';
    include '../../modal/sanpham.php';
    if(isset($_GET['idpro']) && $_GET['idpro'] != ''){
        $idpro = $_GET['idpro'];
        $from = $_GET['from'];
        $iduser = $_SESSION['uid'];
        delesp_cart($idpro,$iduser);
        echo $from;
        if($from == 'cart'){
            header('location: ../../index.php?act=cart');
        }else{
            header('location: ../../index.php');
        }
    }