
<?php   

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../pets/css/style-admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="../images/logo.jpg" alt="" height="100px" width="150px">
                <h3 style="color:white;">SIÊU THỊ TRỰC TUYẾN</h3>
                <div class="input">
                    <input type="text" placeholder="Nhập tại đây">
                    <button type="submit"><a href="#">Tìm kiếm</a></button>
                </div>
                <?php  
                if(isset($_SESSION['iduser'])&&($_SESSION['iduser'])!=""){
                    echo '<h4 style="color:white;">Hello  '.$_SESSION['user'].'</h4>';
                }else{
                    echo "";
                }
                // echo $_SESSION['user'];
                // echo $_SESSION['role']; 
                // echo $_SESSION['iduser']; 
                
                
                ?>
                <div class="dx">
                    <a href="index.php?act=thoat"><input type="button" value="Đăng xuất"></a>
                </div>
            </div>
            <div class="menu-ngang">
                <ul>
                    <li><a href="index.php">Trang chủ admin</a></li>
                    <li><a href="../user/index.php">Trang chủ website</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="menu-doc">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=listdm">Danh mục</a></li>
                    <li><a href="index.php?act=listsp">Sản phẩm</a></li>
                    <li><a href="index.php?act=dskh">Khách hàng</a></li>
                    <li><a href="index.php?act=dsbl">Bình luận</a></li>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                </ul>
            </div>