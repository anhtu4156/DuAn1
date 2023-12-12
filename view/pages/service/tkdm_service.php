<!-- BREADCRUMB -->
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- CONTENT -->
<div id="class" class="">
    <div class="content-wrap" style="padding: 0px;">
        <div class="container">
        <h1>Danh sách tìm kiếm theo danh mục"<?php echo $ten_dm['ten_loai_dv'] ?>"</h1>
            <form action="../../../index.php?act=timkiem" class="form1" method="post">
                <input type="text" class="form-control" name="kyw" style="width: 300px;">
                <button type="submit" class="button"><a href="../../../index.php?act=timkiem">Tìm kiếm</a></button>
            </form>
            <div class="row">
            

                <?php
                if (isset($dv) && $dv != "") {
                    foreach ($dv as $item) {
                        extract($item);
                        $anh="../../../admin/assets/images/upload/".$anh_dv;
                        echo "<div class='col-12 col-sm-6 col-md-4'>
                                <div class='rs-image-box'>
                                    <div class='media'>
                                        <a href='../../../index.php?act=ct_service&&id=" . $id . "'><img src='".$anh."' alt='' class='img-fluid'></a>
                                    </div>
                                    <div class='body-text'>
                                        <h3 class='title'><a href='index.php?act=ct_service'>" . $ten_dv . "</a></h3>
                                        " . $mo_ta . "
                                    </div>
                                </div>
                            </div>";
                    }
                } else { ?>

                    <div style="color: red;" class="fault">
                        <?php
                        echo "Không tìm thấy dịch vụ phù hợp!!";
                        ?>
                    </div>
                <?php }
                ?>



            </div>

        </div>
    </div>
</div>

<!-- CTA -->
<div class="section cta bgi-cover-center" data-background="assets/images/pattern_bg.jpg">
    <div class="content-wrap py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12">
                    <div class="cta-1">
                        <div class="body-text text-white mb-3">
                            <h3 class="my-1">Giảm ngay 30% cho lần hẹn đầu tiên!</h3>
                            <p class="uk18 mb-0">Hãy liên hệ với chúng tôi ngay bây giờ và đặt lịch ngay hôm nay</p>
                        </div>
                        <div class="body-action">
                            <a href="#" class="btn btn-secondary">Appointment Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>