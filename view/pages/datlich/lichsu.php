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

        <table class="table" style="color: black; width: 1150px;">
            <thead>
                <tr class="table-success">
                    <th>STT</th>
                    <th>Ngày đặt lịch</th>
                    <th>Giờ</th>
                    <th>Dịch vụ</th>
                    <th>Nhân viên phụ trách</th>
                    <th>Trạng thái đơn</th>
                    <th>Trạng thái thanh toán</th>
                    <th>Trạng thái dịch vụ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($get_ls as $item) {

                    extract($item);
                    $thanh_toan = get_tttt($id);
                    $ten_dv = load_ten_dv($id_dich_vu);
                    $ca_lam = get_ca_lam($id_khoang_gio);
                    $ten_nv = get_ten_nv($id_nhan_vien);
                    if ($trang_thai_dv == 0) {
                        $dv = "Chưa hoàn thành";
                    } else {
                        $dv = "Đã hoàn thành";
                    }
                    if ($trang_thai_xac_nhan == 0) {
                        $xn = "Chờ xác nhận";
                    } else {
                        $xn = "Đã xác nhận";
                    }
                    if ($thanh_toan['trang_thai_tt'] == 0) {
                        $tt = "Chưa thanh toán";
                    }
                    if ($thanh_toan['trang_thai_tt'] == 1) {
                        $tt = "Đã thanh toán";
                    }
                ?><tr>
                        <td><?= $stt++ ?></td>
                        <td><?= $ngay_dat_lich ?></td>
                        <td><?= $ca_lam['ca_lam'] ?></td>
                        <td><?= $ten_dv['ten_dv'] ?></td>
                        <td><?= $ten_nv['ten_nv'] ?></td>
                        <td <?php if ($trang_thai_xac_nhan == 0) {
                                $st = "color: red;";
                            }
                            if ($trang_thai_xac_nhan == 1) {
                                $st = "color: green;";
                            } ?> style="<?= $st ?>"><?= $xn ?></td>
                        <td <?php if ($thanh_toan['trang_thai_tt'] == 0) {
                                $st = "color: red;";
                            }
                            if ($thanh_toan['trang_thai_tt'] == 1) {
                                $st = "color: green;";
                            } ?> style="<?= $st ?>"><?= $tt ?></td>
                        <td <?php if ($trang_thai_dv == 0) {
                                $st = "color: red;";
                            }
                            if ($trang_thai_dv == 1) {
                                $st = "color: green;";
                            } ?> style="<?= $st ?>"><?= $dv ?></td>
                        <td><?php
                            if ($trang_thai_dv == 1) { ?>
                                <form action="../../../index.php?act=binhluan" class="form" method="post">
                                    <input type="text" class="form-control" name="binhluan" style="margin-bottom: 10px">
                                    <a href="../../../index.php?act=binhluan"><input type="submit" name="gui_bl" class="btn btn-primary" value="Gửi bình luận"></input></a>
                                    <input type="hidden" name="ngay_bl" value="<?php echo date('Y-m-d') ?>">
                                    <input type="hidden" name="id_tk" value="<?= $_SESSION['user_id'] ?>">
                                    <input type="hidden" name="id_dv" value="<?=$ten_dv['id'] ?>">
                                </form>
                            <?php }
                            if ($trang_thai_xac_nhan == 0 &&$thanh_toan['trang_thai_tt']==0) {?>
                            <form action="../../../index.php?act=huy_don" method="post">
                                <input type="hidden" name="id_dl" value="<?=$thanh_toan['id_dl']?>">
                                <input type="hidden" name="id_hd" value="<?=$thanh_toan['id']?>">
                            <?php
                                echo '<a href="../../../index.php?act=huy_don" onclick=\'return confirm("Bạn có chắc chắn muốn xóa")\'><input type="submit" name="huy" class="btn btn-danger" value="Huỷ"></input></a>';
                            }
                            ?>
                            </form>
                        </td>
                    </tr>

                <?php }



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