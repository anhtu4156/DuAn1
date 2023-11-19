<?php
$danhmuc=loadAll_danhmuc();

?>
            <div class="content-item">
                <h2>Thêm mới sản phẩm</h2>
                <div class="form">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp">
                        </div>
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh">
                        </div>
                        <div class="form-group">
                            <label for="">Mã danh mục</label>
                            <select name="id_dm" id="" class="form-control">
                                <option value="">mã danh mục</option>
                                <?php
                                foreach($danhmuc as $key){
                                extract($key);
                                ?>
                                <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <input type="text" class="form-control" name="mo_ta">
                        </div>
                        <br>
                        <input  class="btn btn-success" type="submit" name="addnew" value="Thêm mới">
                        <button class="btn btn-primary" type="reset">Nhập lại</button>
                        <a href="index.php?act=listsp"><input class="btn btn-info" value="Danh sách" type="button"></a><br>
                        <?php
                        
                        if(isset($thongbao)&&$thongbao!=""){
                            echo $thongbao;
                        }else{
                            echo "";
                        }
                        
                        ?>
                    </form>

                </div>
            </div>