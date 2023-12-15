<?php //get_template_part( 'template_part/section-content') ?>
<?php //get_template_part("template_part/section", "content"); ?>
		<section id="doctor">

			<div class="content">

				<div class="title">ĐỘI NGŨ Y - BÁC SỸ BỆNH VIỆN</div>

				<div class="container-fluid">

					<div class="slide-list-doctor">

						<div class="swiper-container slide-doctor">

						    <div class="swiper-wrapper">
								<?php $args = array( 'post_type' => 'bac-si', 'posts_per_page' => 10, 'post_status' => 'publish'); ?>
								<?php $getposts = new WP_query( $args);?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="swiper-slide">
										<div class="item">
											<div class="avarta">
													<img class="img-fluid" src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
											</div>
											<div class="info">
												<div class="name"><?php the_title(); ?></div>
												<div class="room"><?php echo get_field('position'); ?></div>
											</div>
										</div>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
						    </div>

						    <!-- Add Pagination -->

						    <div class="swiper-pagination"></div>

						</div>

					</div>

				</div>

			</div>

		</section>