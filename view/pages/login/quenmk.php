<div class="t_container">
    <div class="wrapper">
        <form method="post" action="" >
            <h1>Quên mật khẩu</h1>
            <div class=" input-box">
            <input name="email" id="username" type="email" placeholder="email">
            <i class='bx bxs-user'></i>
            <span><?php echo isset($errMsg['username']) ? $errMsg['username'] : ''; ?></span>
    </div>
    
    <input name="login" type="submit" class="btn" value="Gửi"></input>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo "<div class='alert alert-success mt-3'>'.$thongbao.'</div>";
    }

    ?>
    <div class="register-link">
        <p>Chưa có tài khoản? <a href="index.php?act=reg">Đăng Ký ngay</a></p>
    </div>
    </form>
</div>
</div>