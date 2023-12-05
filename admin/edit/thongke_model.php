<?php 
    include '../../modal/pdo.php';
    include '../../modal/bill.php';
    if(!empty($_POST['time'])){
        $interval = $_POST['time'];

    }else{
        $interval = '7';
    }
    $date = new DateTime();
    $to  = $date->format('Y/m/d');
    $date -> setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
    $dateInterval = new DateInterval('P'.$interval.'D');
    $lastDate = $date->sub($dateInterval);
    $from =  $lastDate->format('Y/m/d');
    $result = thongke($from,$to);
    echo json_encode($result);