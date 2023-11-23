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
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					
					<?php foreach($newdv as $dv){ 
					extract($dv);
					$hinh= $img_path.$anh_dv;
					$linkdv= "index.php?act=ct_service&iddv=$id";
					?>
					<!-- Item 1 -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media"> 
								<a href="<?php echo $linkdv ?>">
									<img src="<?php echo $hinh ?>" alt="" class="img-fluid" ></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="<?php echo $linkdv ?>"><?php echo $ten_dv ?></a></h3>
								<?php echo $mo_ta ?>
							</div>
						</div>
					</div>
					<?php } ?>

					<!-- Item 2 -->
					<!-- <div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media">
								<a href="index.php?act=ct_service"><img src="assets/images/services02.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="index.php?act=ct_service">Vaccination Supply</a></h3>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div> -->

					<!-- Item 3 -->
					<!-- <div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media">
								<a href="index.php?act=ct_service"><img src="assets/images/services03.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="index.php?act=ct_service">Pet Analysist</a></h3>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div> -->

					<!-- Item 4 -->
					<!-- <div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media">
								<a href="index.php?act=ct_service"><img src="assets/images/services04.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="index.php?act=ct_service">Preventive Medicine</a></h3>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div> -->

					<!-- Item 5 -->
					<!-- <div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media">
								<a href="index.php?act=ct_service"><img src="assets/images/services05.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="index.php?act=ct_service">Pet Diagnostics</a></h3>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div> -->

					<!-- Item 6 -->
					<!-- <div class="col-12 col-sm-6 col-md-4">
						<div class="rs-image-box">
							<div class="media">
								<a href="index.php?act=ct_service"><img src="assets/images/services06.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="body-text">
								<h3 class="title"><a href="index.php?act=ct_service">Patient Departement</a></h3>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div> -->

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