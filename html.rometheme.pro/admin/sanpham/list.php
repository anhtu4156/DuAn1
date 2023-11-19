
            <div class="content-item">
                <h2>Danh sách sản phẩm</h2>
                <table border="1" class="table table-bordered" style="width: 1170px">
                    <thead>
                        <th></th>
                        <th>Mã sp</th>
                        <th>Tên sp</th>
                        <th>Đơn giá</th>
                        <th>Hình ảnh</th>
                        <th>Mã danh mục</th>
                        <th>Số lượt xem</th>
                        <th>Mô tả</th>
                        <th></th>
                    </thead>

                    <tbody>
                        <?php
                            foreach($listSp as $item){
                                extract($item);
                                $editsp="index.php?act=editsp&id=".$id;
                                $deletesp="index.php?act=deletesp&id=".$id;
                                echo ' <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$price.'</td>
                                <td><img src="../../images/'.$img.'" width="100" height="100"></td>
                                <td>'.$iddm.'</td>
                                <td>'.$luotxem.'</td>
                                <td>'.$mota.'</td>
                                <td><a href="'.$editsp.'"><input type="button" value="Sửa" class="btn btn-warning"></a>  <a href="'.$deletesp.'"><input type="button" value="Xoá" class="btn btn-danger"></a></td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>


                <button class="btn btn-default">Chọn tất cả</button>
                <button class="btn btn-warning">Bỏ chọn tất cả</button>
                <button class="btn btn-danger">Xoá các mục đã chọn</button>
                <a href="index.php?act=addsp"><input class="btn btn-success" value="Thêm mới" type="button"></a>
            </div>
        </div>
    </div>
</body>
</html>