<?php

if(is_array($sp)){
    extract($sp);
}
$hinhpath="../images/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}
?>
            <div class="content-item">
                <h2>Sửa sản phẩm</h2>
                <div class="form">
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                        </div>
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia" value="<?php if(isset($price)&&($price!="")) echo $price ;?>">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh" >
                            <?php echo $hinh ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mã danh mục</label>
                            <select name="id_dm" id="" class="form-control">
                                <option value="">mã danh mục</option>
                                <?php
                                foreach($danhmuc as $key){
                                        if($iddm==$key['id']){
                                            echo ' <option value="'.$key['id'].'"selected>'.$key['name'].'</option>';
                                        }else{
                                            echo ' <option value="'.$key['id'].'">'.$key['name'].'</option>';
                                        }
                                ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <input type="text" class="form-control" name="mo_ta" value="<?php if(isset($mota)&&($mota!="")) echo $mota ;?>">
                        </div>
                        <br>
                        <input  class="btn btn-success" type="submit" name="update" value="Lưu">
                        <button class="btn btn-primary" type="reset">Nhập lại</button>
                        <a href="index.php?act=listsp"><input class="btn btn-info" value="Danh sách" type="button"></a><br>
                        <?php
                        
                        if(isset($thongbao)&&$thongbao!=""){
                            echo $thongbao;
                        }
                        
                        ?>
                    </form>

                </div>
            </div>