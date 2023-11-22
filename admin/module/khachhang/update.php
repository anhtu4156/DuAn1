
<?php

if(is_array($tk)){
    extract($tk);
}


?>

<div class="content-item">
                <h2>Cập nhật tài khoản admin</h2>
                <div class="form">
                    <form action="index.php?act=updatetk" method="post">
                        
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text"  name="user" class="form-control"  value="<?=$user?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text"  name="email" class="form-control"  value="<?=$email?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="text" name="pass" class="form-control"  value="<?=$pass?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text"  name="address" class="form-control"  value="<?=$address?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text"  name="tel" class="form-control"  value="<?=$tel?>">
                            
                        </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                            <input  class="btn btn-success" type="submit" name="update" value="Cập nhật">
                            <input type="reset" class="btn btn-primary" value="Nhập lại">
                            <a href="index.php?act=dskh"><input class="btn btn-info" value="Danh sách" type="button"></a>
                        </div>
                        <?php
                        
                        if(isset($thongbao)&&$thongbao!=""){
                            echo $thongbao;
                        }
                        
                        ?>
                    </form>
                </div>
    </div>