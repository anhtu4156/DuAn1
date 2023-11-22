<div class="content-item">
                <h2>Danh sách bình luận</h2>
                <table border="1" class="table table-bordered">
                    <thead>
                        <th></th>
                        <th>Mã Bình luận</th>
                        <th>Nội dung</th>
                        <th>Mã khách hàng</th>
                        <th>Mã hàng hoá</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($dsbl as $bl){
                                extract($bl);
                                $xoabl='<a href="index.php?act=xoabl&idxoa='.$id.'"><input type="button" value="Xoá" name="xoabl" class="btn btn-danger"></a>';
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td><input type="button" value="Phản hồi" class="btn btn-warning"> '.$xoabl.'</td>
                                    </tr>';
                            }
                        
                        
                        ?>
                    </tbody>
                </table>


                <button class="btn btn-default">Chọn tất cả</button>
                <button class="btn btn-warning">Bỏ chọn tất cả</button>
                <button class="btn btn-danger">Xoá các mục đã chọn</button>
            </div>