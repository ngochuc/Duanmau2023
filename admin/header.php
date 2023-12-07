<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/chuc.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <nav style="list-style: none; gap:30px;">
                <li><a href="<?php echo 'index.php?act=sanpham' ?>">Sản phẩm</a></li>
                <li><a href="<?php echo 'index.php?act=danhmuc' ?>">Danh mục</a></li>
                <li><a href="<?php echo 'index.php?act=binhluan' ?>">Bình luận</a></li>
                <li><a href="<?php echo 'index.php?act=user' ?>">Người dùng</a></li>
                <li><a href="<?php echo 'index.php?act=order' ?>">Đơn hàng</a></li>
                <li><a href="<?php echo 'index.php?act=thongke' ?>">Thống kê</a></li>
            </nav>
            <div class="loginhome">
                <a href="../view/logout.php">Đăng xuất</a>
            </div>
        </header>