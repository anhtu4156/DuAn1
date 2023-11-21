
<?php

if(is_array($dm)){
    extract($dm);
}


?>

<div class="content-item">
                <h2>Cập nhật danh mục</h2>
                <div class="form">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" class="form-control" name="tendm" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                            <br>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                            <input  class="btn btn-success" type="submit" name="update" value="Cập nhật">
                            <input type="reset" class="btn btn-primary" value="Nhập lại">
                            <a href="index.php?act=listdm"><input class="btn btn-info" value="Danh sách" type="button"></a>
                        </div>
                        <?php
                        
                        if(isset($thongbao)&&$thongbao!=""){
                            echo $thongbao;
                        }
                        
                        ?>
                    </form>
                </div>
    </div>