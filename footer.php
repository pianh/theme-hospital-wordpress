	<footer>

		<div class="content">

			<div class="container">

				<div class="row">
					<?php $branch = get_field('chi_nhanh','option') ?>
					<?php foreach ($branch as $key => $value) { ?>
						<div class="col-md-4">

							<div class="item">
								<div class="title"><?php echo $value['ten_chi_nhanh'] ?></div>
								<p><i class="fa fa-map-marker"></i><?php echo $value['dia_chi'] ?></p>
								<p><i class="fa fa-phone"></i><?php echo $value['so_dien_thoai'] ?></p>
								<p><i class="fa fa-home"></i><?php echo $value['email'] ?></p>
							</div>

						</div>
					<?php } ?>

					<div class="col-md-12">

						<div class="copying">

							<p>Tầng 8, Tòa nhà TOYOTA Thanh Xuân, 315 Trường Chinh, Thanh Xuân, Hà Nội</p>

						</div>

					</div>

				</div>

			</div>

		</div>

	</footer>	

</body>

<?php wp_footer() ?>

</html> 