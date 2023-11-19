<div class="content-item">
                <h2>Thêm mới danh mục</h2>
                <div class="form">
                    <form action="index.php?act=adddm" method="post">
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" class="form-control" name="tendm">
                            <br>
                            <input  class="btn btn-success" type="submit" name="addnew" value="Thêm mới">
                            <input type="reset" class="btn btn-primary" value="Nhập lại">
                            <a href="index.php?act=listdm"><input class="btn btn-info" value="Danh sách" type="button"></a>
                        </div>
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