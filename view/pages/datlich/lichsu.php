<?php
$cthd_bt_dv = get_cthd_bt_dv($id_tk);
 foreach($cthd_bt_dv as $item){
    extract($item);
 }
$cthd_hd_cl = get_cthd_hd_cl($id_tk);
 foreach($cthd_hd_cl as $item){
    extract($item);
 }
$cthd_nv = get_cthd_nv($id_tk);
foreach($cthd_nv as $item){
    extract($item);
}
$cthd = get_cthd($id_tk);


?>
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="../../../index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lịch sử đặt lịch</li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<?php   ?>
<section>
    <div class="container">

        <table class="table" style="color: black;">
            <thead>
                <tr class="table-success">
                    <th>STT</th>
                    <th>Ngày đặt lịch</th>
                    <th>Giờ</th>
                    <th>Dịch vụ</th>
                    <th>Nhân viên phụ trách</th>
                    <th>Trạng thái đơn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($cthd as $item) {
                    
                    extract($item);
                    if($trang_thai==0){
                        $tt="Chưa hoàn thành";
                    }else{
                        $tt="Đã hoàn thành";
                    }
                    echo "<tr>
                        <td>" . $stt++ . "</td>
                        <td>" . $ngay_dat_lich . "</td>
                        <td>" . $ca_lam . "</td>
                        <td>" . $ten_dv . "</td>
                        <td>" . $ten_nv . "</td>
                        <td>".$tt."</td>
                    </tr>";
                }


                ?>
            </tbody>
        </table>
        <!-- <form action="">
            <?php
            //if($trang_thai!=0){
            ?>
                <input type="text" class="form-control">
                <a href="index.php?act=binhluan"><input type="submit" name="binhluan" class="btn btn-primary" value="Gủi" style="width: 100px;"></input></a>
            <?php //}


            ?>
        </form> -->


    </div>
</section>