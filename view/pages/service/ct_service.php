<!-- BREADCRUMB -->
<div class="section bg-breadcrumb">
	<div class="content-wrap py-0 pos-relative">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dịch vụ cá nhân</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- CONTENT -->
<div id="class" class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row">
				<div class="col-12 col-sm-12 col-md-4 order-last">

					<div class="widget categories">
						<ul class="category-nav">
							<!-- <li class="active"><a href="#">Pet Barber Services</a></li> -->
							<?php

								$dm = load_dm_dv();
								foreach($dm as $item){
									extract($item);
									echo "<li class=''><a href='../../../index.php?act=timkiem_theodm&id_dm=$id'>".$ten_loai_dv."</a></li>";
								}



							?>
							<!-- <li><a href="#">Pet Vaccination</a></li>
							<li><a href="#">Pet Consultation</a></li>
							<li><a href="#">Preventive Medicine</a></li>
							<li><a href="#">Pet Diagnostics</a></li>
							<li><a href="#">Patient Departement</a></li> -->
						</ul>
					</div>

					<div class="promo-ads bg-secondary">
						<div class="content text-white">
							<h4 class="title text-primary">Giờ làm việc</h4>
							<p>Hỗ trợ của chúng tôi sẵn sàng giúp đỡ bạn 24 giờ một ngày. Chúng tôi cung cấp tốt nhất của chúng tôi.</p>
							<ul class="list-unstyled">
								<li>
									Thứ 2 - thứ 6 : 08.00 sáng - 20.00 tối
								</li>
								<li>
									Thứ 7 - Chủ Nhật : 09.00 sáng - 20.00 tối
								</li>

							</ul>
						</div>
					</div>

				</div>
				<?php

				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					$dv = load_one_dv($id);
					extract($dv);
					//echo $ten_dv;
				}
				$anh="../../../admin/assets/images/upload/".$anh_dv;

				?>
				<div class="col-12 col-sm-12 col-md-8">
					<img src="<?php echo $anh ?>" alt="" class="img-fluid" style="width: 600px; height: 500px;">
					<h2 class="section-heading text-primary no-after mb-4">
						<?php echo $ten_dv ?>
					</h2>
					<p class="text-black lead"><?php echo $mo_ta ?></p>

					<div class="spacer-10"></div>
					<h2 class="section-heading text-primary no-after mb-4">
						BÌNH LUẬN CỦA KHÁCH HÀNG	
					</h2>

					<div class="accordion rs-accordion" id="accordionExample">
						<!-- Item 1 -->
						<!-- <div class="card">
							<div class="card-header" id="headingOne">
								<h3 class="title">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Medicine or Vaccine
									</button>
								</h3>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									Create and publilsh dynamic websites for desktop, tablet, and mobile devices that meet the latest web standards- without writing code. Design freely using familiar tools and hundreds of web fonts. easily add interactivity, including slide shows, forms, and more.
								</div>
							</div>
						</div> -->

						
						<?php
						$ds_bl=load_all_bl($_GET['id']);
						
						foreach($ds_bl as $item){
							extract($item);
							$ten_tk=get_ten_tk($id_tk);
							echo "<div class='card'>
							<div class='card-header' id='headingOne'>
								<h3 class='title'>
									<button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
										".$ten_tk['ten_tai_khoan']."
									</button>
								</h3>
							</div>
							<div id='collapseOne' class='collapse show' aria-labelledby='headingOne' data-parent='#accordionExample'>
								<div class='card-body'>
									".$noi_dung."
								</div>
							</div>
						</div>";
						}
						
						
						?>
						<!-- Item 2 -->
						<!-- <div class="card">
							<div class="card-header" id="headingTwo">
								<h3 class="title">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Give Therapy
									</button>
								</h3>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div> -->
						<!-- Item 3 -->
						<!-- <div class="card">
							<div class="card-header" id="headingThree">
								<h3 class="title">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Check Pet Conditions
									</button>
								</h3>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
									<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
								</div>
							</div>
						</div> -->
					</div>
					<!-- end accordion -->
					<?php 
					if(isset($_SESSION['user_id'])){?>
						<!-- <form action="../../../index.php?act=binhluan" class="form" method="post">
							<input type="text" class="form-control" name="binhluan" style="margin-bottom: 20px; margin-top:20px;">
							<a href="../../../index.php?act=binhluan"><input type="submit" name="gui_bl" class="btn btn-primary" value="Gửi bình luận"></input></a>
							<input type="hidden" value="<?php echo date('Y-m-d') ?>" name="ngay_bl">
							<input type="hidden" name="id_tk" value="<?=$_SESSION['user_id'] ?>">
							<input type="hidden" value="<?=$_GET['id']?>" name="id_dv">
						</form> -->
					<?php }
					
					
					?>
				</div>

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
							<a href="#" class="btn btn-secondary">Hẹn ngay bây giờ!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>