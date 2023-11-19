<div class="content-item">
                    <h2>Danh sách khách hàng</h2>
                    <table border="1" class="table table-bordered">
                        <thead>
                            <th></th>
                            <th>Mã khách hàng</th>
                            <th>Tên đăng nhập</th>
                            <th>email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($dskh as $item){
                                    extract($item);
                                    $delkh='<a href="index.php?act=xoakh&idkh='.$id.'"><input type="button" value="Xoá" class="btn btn-danger"></a>';
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$user.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$delkh.'</td>
                                        </tr>';
                                }
                            
                            
                            ?>
                           
                        </tbody>
                    </table>
    
    
                    <button class="btn btn-default">Chọn tất cả</button>
                    <button class="btn btn-warning">Bỏ chọn tất cả</button>
                    <button class="btn btn-danger">Xoá các mục đã chọn</button>

                    
                    <?php  
                    
                    if(isset($_SESSION['role'])&& $_SESSION['role']==2){?>
                            <h2>Danh sách tài khoản admin</h2>
                        <table border="1" class="table table-bordered">
                            <thead>
                                <th></th>
                                <th>Mã tài khoản</th>
                                <th>Tên đăng nhập</th>
                                <th>email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vị trí</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dstk as $item){
                                        extract($item);
                                        if($role==1){
                                            $vitri="Admin";
                                        }
                                        if($role==2){
                                            $vitri= "Tổng Admin";
                                        }
                                        
                                        $delkh='<a href="index.php?act=xoakh&idkh='.$id.'"><input type="button" value="Xoá" class="btn btn-danger"></a>';
                                        $edittk='<a href="index.php?act=edittk&id='.$id.'"><input type="button" value="Sửa" class="btn btn-warning"></a>';
                                        echo '<tr>
                                                <td><input type="checkbox"></td>
                                                <td>'.$id.'</td>
                                                <td>'.$user.'</td>
                                                <td>'.$email.'</td>
                                                <td>'.$address.'</td>
                                                <td>'.$tel.'</td>
                                                <td>'.$vitri.'</td>
                                                <td>'.$delkh.'  '.$edittk.'</td>
                                            </tr>';
                                    }
                                
                                
                                ?>
                            
                            </tbody>
                        </table>
        
        
                        <button class="btn btn-default">Chọn tất cả</button>
                        <button class="btn btn-warning">Bỏ chọn tất cả</button>
                        <button class="btn btn-danger">Xoá các mục đã chọn</button>
                        <a href="index.php?act=signin"><input type="button"class="btn btn-success" value="Thêm tài khoản admin" ></a>
                    <?php }
                    
                    ?>
                    
    </div>