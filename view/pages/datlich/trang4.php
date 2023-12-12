<!-- BREADCRUMB -->
<?php
$dl_cl=get_dl_cl();
//extract($dl_cl);
$dl_dv=get_dl_dv_tc();
//extract($dl_dv);
$dl_nv=get_dl_kt_nv();
//extract($dl_nv);
$hd_dv_nv=get_hd_dv_nv();
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
                    <td><?= $dl_dv['ngay'] ?></td>
                    <td><?= $dl_cl['ca_lam'] ?></td>
                    <td><?= $dl_dv['ten_dv'] ?></td>
                    <td><?= $dl_nv['ten_nv'] ?></td>
                    <td>
                        <?php
                        if ($hd_dv_nv['trang_thai_tt'] == 0) {
                            echo "Chưa thanh toán";
                        } else if($hd_dv_nv['trang_thai_tt']==1) {
                            echo "Đã thanh toán";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h1>Xem thêm các dịch vụ khác</h1>
        <div id="class" class="">
		<div class="content-wrap" style="padding: 0px;">
			<div class="container">
				<div class="row">
				<?php
						$dsdv=get_3_dv();
						foreach($dsdv as $item){
							extract($item);
							echo "<div class='col-12 col-sm-6 col-md-4'>
							<div class='rs-image-box'>
								<div class='media'>
									<a href='../../../index.php?act=ct_service&id=".$id."'><img src='../../../admin/assets/images/upload/".$anh_dv."' alt='' class='img-fluid'></a>
								</div>
								<div class='body-text'>
									<h3 class='title'><a href='index.php?act=ct_service&id=".$id."'>".$ten_dv."</a></h3>
									".$mo_ta."
								</div>
							</div>
						</div>";
						}
					
					
					
					
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
    </div>
</section>