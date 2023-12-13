<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>

	<title> <?php wp_title(); ?> </title>

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta>

    <?php $urltheme = get_bloginfo('stylesheet_directory'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>

		<div class="header-top">

			<div class="container">

				<div class="row"> 

					<div class="col-md-9">

						<div class="left">

							<ul>

								<li>

									<div class="sotical">

										<ul class="list-inline">

											<li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>

											<li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>

											<li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>

											<li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>

										</ul>  

									</div>

								</li>

							<li><span>Hotline: 09233 444 2232</span></li>

							<li><span>Email: info@trieusonhospital.org</span></li>

							</ul>

						</div>

					</div>

					<div class="col-md-3">

						<div class="right pull-right">

							<a href="">Đặt lịch khám</a>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="header-menu">

			<div class="container">

				<div class="menu-mobile" style="display: none;">

					<div class="row">

						<div class="col-md-9 col-sm-9 col-xs-9">

							<div class="logo">

								<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid" alt=""></a>

							</div>

						</div>

						<div class="col-md-3 col-sm-3 col-xs-3">

							<div class="btn-menu">

								<a href="javascript:0"><i class="fa fa-times fa-bars"></i></a>

							</div>

						</div>

					</div>

				</div>

				<ul class="list-inline">

					<li class="list-inline-item">

						<div class="logo">

							<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid" alt=""></a>

						</div>

					</li>

					<li class="list-inline-item">

						<a href="index.html" class="active">TRANG CHỦ</a>

					</li>

					<li class="list-inline-item">

						<a href="about.html">giới thiệu</a>

					</li>

					<li class="list-inline-item">

						<a href="service.html">dịch vụ</a>

					</li>

					<li class="list-inline-item">

						<a href="team.html">đội ngũ</a>

					</li>

					<li class="list-inline-item">

						<a href="new.html">tin tức</a>

					</li> 

					<li class="list-inline-item">

						<a href="contact.html">liên hệ</a>

					</li>

					<li class="list-inline-item">

						<a href="javascript:0" class="search-menu"><img src="<?php bloginfo('template_directory'); ?>/images/search.png" class="img-fluid" alt=""></a>

						<div class="form-seaarch">

							<form action="">

								<input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">

							</form>

						</div>

					</li>

				</ul>

			</div>

		</div>

	</header>