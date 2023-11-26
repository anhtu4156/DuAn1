<?php
if (is_array($info)) {
    extract($info);
}
var_dump($info);
?>

<div class="container mt-5 mb-5">
    <h3 class="alert alert-info">CẬP NHẬT THÔNG TIN</h3>
    <div class="col-12 col-sm-12 col-md-12">
        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input value="<?php echo $ten_tai_khoan; ?>" name="user" type="text" class="form-control" placeholder="Nhập Tên  của bạn" required="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" placeholder="Nhập Email" required="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input value="<?php echo $ngay_sinh;?>" name="date" type="date" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input value="<?php echo $dia_chi; ?>" name="adr" type="text" class="form-control" placeholder="Địa chỉ" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input value="<?php echo $so_dien_thoai; ?>" name="sdt" type="text" class="form-control" placeholder="Nhập số điện thoại" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <input name="send" class="btn btn-info" type="submit">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo "<div class='alert alert-success mt-3'>'.$thongbao.'</div>";
            }

            ?>
        </form>

    </div>
</div>