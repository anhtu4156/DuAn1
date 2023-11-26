<div class="container mt-5 mb-5">
    <h3 class="alert alert-info">ĐỔI MẬT KHẨU</h3>
    <div class="col-12 col-sm-12 col-md-12">
        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input  name="oldpass" type="text" class="form-control" placeholder="Mật khẩu cũ" required="">
                        <div class="help-block with-errors text-danger"><?php isset($thongbao)? $thongbao : ""?></div>
                    </div>
                    <div class="form-group">
                        <input  name="pass" type="text" class="form-control" placeholder="Mật khẩu mới" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input  name="repass" type="text" class="form-control" placeholder="Xác nhận lại mật khẩu" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                
                
            </div>

            <input name="send" class="btn btn-info" type="submit">
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo "<div class='alert alert-success mt-3'>'.$thanhcong.'</div>";
            }

            ?>
        </form>

    </div>
</div>