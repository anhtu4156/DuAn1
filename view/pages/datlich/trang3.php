<!-- BREADCRUMB -->
<?php

$ds_pttt_tk = get_dl_pttt_tk();
extract($ds_pttt_tk);
$hd_dv_nv = get_hd_dv_nv();
extract($hd_dv_nv);
$hd_cl = get_hd_cl();
extract($hd_cl);



?>
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="../../../index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <table class="table" style="color: black;">
            <thead>
                <tr class="table-success">
                    <th>Ngày đặt lịch</th>
                    <th>Khoảng Giờ</th>
                    <th>Dịch vụ</th>
                    <th>Nhân viên</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <td><?= $ngay_dat_lich ?></td>
                    <td><?= $ca_lam ?></td>
                    <td><?= $ten_dv ?></td>
                    <td><?= $ten_nv ?></td>
                    <td><?= $gia ?></td>
                </tr>
            </tbody>
        </table>
        <div style="display: grid; grid-template-columns:1fr 1fr;">
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="../../../model/xylythanhtoan.php">
                <a href="index.php?act=thanhtoan"><input type="submit" name="momo" class="btn btn-primary" value="Thanh Toán MOMO QR CODE"></input></a>
                <!-- <a href="index.php?act=thanhtoan"><input type="submit" name="momo" class="btn btn-primary" value="Thanh toán bằng thẻ ATM"></input></a> -->
                <input type="hidden" name="price" value="<?= $gia ?>">
            </form>
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="../../../model/xulythanhtoan_atm.php">

                <a href="index.php?act=thanhtoan"><input type="submit" name="momo" class="btn btn-primary" value="Thanh toán bằng thẻ ATM"></input></a>
                <input type="hidden" name="price" value="<?= $gia ?>">
            </form>
        </div>
    </div>
</section>