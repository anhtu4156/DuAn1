<!-- BREADCRUMB -->
<?php
$hd_dv_nv = get_hd_dv_nv();
extract($hd_dv_nv);

?>
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="../../../index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đơn đặt lịch</li>

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
                    <th>Giờ</th>
                    <th>Dịch vụ</th>
                    <th>Nhân viên</th>
                    <th>Trạng thái đơn</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <td><?= $ngay_dat_lich ?></td>
                    <td><?= $khoang_gio ?></td>
                    <td><?= $ten_dv ?></td>
                    <td><?= $ten_nv ?></td>
                    <td>
                        <?php
                        if ($trang_thai == 0) {
                            echo "Chưa thanh toán";
                        } else {
                            echo "Đã thanh toán";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <form action="">
            <?php 
            //if($trang_thai!=0){?>
                <input type="text" class="form-control">
                <a href="index.php?act=binhluan"><input type="submit" name="binhluan" class="btn btn-primary" value="Gủi" style="width: 100px;"></input></a>
            <?php //}
            
            
            ?>
        </form> -->


    </div>
</section>