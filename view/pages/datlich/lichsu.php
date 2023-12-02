<?php
$id_tk = $_SESSION['user_id'];
$get_ls = get_ls($id_tk);


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
                foreach ($get_ls as $item) {

                    extract($item);
                    $ten_dv = load_ten_dv($id_dich_vu);
                    $ca_lam = get_ca_lam($id_khoang_gio);
                    $ten_nv = get_ten_nv($id_nhan_vien);
                    if ($trang_thai_dv == 0) {
                        $tt = "Chưa hoàn thành";
                    } else {
                        $tt = "Đã hoàn thành";
                    }
                    echo "<tr>
                        <td>" . $stt++ . "</td>
                        <td>" . $ngay_dat_lich . "</td>
                        <td>" . $ca_lam['ca_lam'] . "</td>
                        <td>" . $ten_nv['ten_nv'] . "</td>
                        <td>" . $ten_dv['ten_dv'] . "</td>
                        <td>" . $tt . "</td>
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