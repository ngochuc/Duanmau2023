<?php 
    if(isset($_GET['state']) && $_GET['state'] == 'shipped'){
        $id_order = $_GET['id'];
        shipped_order($id_order);
        header('location: index.php?act=order');
    }elseif(isset($_GET['id'])){
        $id_order = $_GET['id'];
        confirm_order($id_order);
        $order = load_order($id_order);
        $doanhthu = $order['total_price'];
        $soluong = 1;
        $date = new DateTime();
        $date ->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
        $date = $date -> format('Y/m/d');
        $thongke = thongke_ngay($date);
        if(!empty($thongke)){
            $doanhthu = $thongke['doanhthu'] + $doanhthu;
            $soluong = $thongke['soluong'] + $soluong;
            update_thongke($date,$soluong,$doanhthu);
        }else{
            add_thongke($soluong,$doanhthu);
        }
        header('location: index.php?act=order');
    }
