<div class="content-item">
                <h2>Danh sách danh mục</h2>
                <table border="1" class="table table-bordered">
                    <thead>
                        <th></th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th></th>
                    </thead>
                    <tbody>
                       <?php  
                       
                       foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $editdm="index.php?act=editdm&id=".$id;
                        $deletedm="index.php?act=deletedm&id=".$id;
                            echo' <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$editdm.'"><input type="button" value="Sửa" class="btn btn-warning"></a>  <a href="'.$deletedm.'"><input type="button" value="Xoá" class="btn btn-danger"></a></td>
                            </tr>';
                       }
                       
                       
                       ?>
                    </tbody>
                </table>


                <button class="btn btn-default">Chọn tất cả</button>
                <button class="btn btn-warning">Bỏ chọn tất cả</button>
                <button class="btn btn-danger">Xoá các mục đã chọn</button>
                <a href="index.php?act=adddm"><input class="btn btn-success" value="Thêm mới" type="button"></a>
            </div>