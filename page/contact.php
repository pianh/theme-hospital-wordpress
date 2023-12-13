<?php
/*
Template name: Liên hệ
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main>
		<section id="bn-cate">

			<div class="avarta"><img src="<?php bloginfo("template_directory") ?>/images/slide12.jpg" class="img-fluid" width="100%" alt=""></div>

			<div class="container">

				<div class="title-cate">

					<span>liên hệ</span>

				</div>

			</div>

		</section>

		<section id="contact">

			<div class="content">

				<div class="container">

					<div class="content-contact">

						<div class="row">

							<div class="col-md-5">

								<div class="left">

									<div class="logo"><a href=""><img src="<?php bloginfo("template_directory") ?>/images/logo.png" class="img-fluid" alt=""></a></div>

									<p><i class="fa fa-home"></i>Giờ mở cửa: 08h00 - 21h30 hằng ngày</p>

									<p><i class="fa fa-map-marker"></i>Địa chỉ: Triệu Sơn - Thanh Hóa</p>

									<p><i class="fa fa-phone"></i>Điện thoại</p>

									<p class="number-phone">0954 222 665</p>

								</div>

							</div>

							<div class="col-md-7">

								<div class="right">

									<div class="item">

										<div class="row">

											<div class="col-md-2">

												<label for="">Họ tên</label>

											</div>

											<div class="col-md-10">

												<input type="text" class="form-control">

											</div>

										</div>

									</div>

									<div class="item">

										<div class="row">

											<div class="col-md-2">

												<label for="">Email</label>

											</div>

											<div class="col-md-10">

												<input type="text" class="form-control">

											</div>

										</div>

									</div>

									<div class="item">

										<div class="row">

											<div class="col-md-2">

												<label for="">Điện thoại</label>

											</div>

											<div class="col-md-10">

												<input type="text" class="form-control">

											</div>

										</div>

									</div>

									<div class="item">

										<div class="row">

											<div class="col-md-2">

												<label for="">Nội dung</label>

											</div>

											<div class="col-md-10">

												<textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>

											</div>

										</div>

									</div>

									<div class="item">

										<div class="row">

											<div class="col-md-2"></div>

											<div class="col-md-10">

												<input type="submit" class="btn-contact" value="GỬI LIÊN HỆ">

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>
		<?php get_template_part( "template_part/before","footer") ?>
</main>

<?php get_footer(); ?>