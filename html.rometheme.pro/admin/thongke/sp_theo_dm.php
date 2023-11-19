
<div class="content-item">
                <h2>Thống kê sản phẩm theo danh mục</h2>
                <table border="1" class="table table-bordered" style="width: 1170px">
                    <thead>
                        <th>STT</th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </thead>
                    <tbody>
                    <?php 
                        $stt=1;
                            foreach($dstk as $item){
                                extract($item);
                                echo '<tr>
                                        <td>'.$stt++.'</td>
                                        <td>'.$iddm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>


                <a href="index.php?act=bieudo"><input class="btn btn-success" value="Xem biểu đồ" type="button"></a>
            </div>
        </div>
    </div>
</body>
</html>