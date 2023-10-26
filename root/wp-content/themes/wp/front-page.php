<?php get_header();

// get field
$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];

$topMainvisual = get_field('top_section1', 'option');
$topMainvisualBg = $topMainvisual['mainvisual_image'];
$topMainvisualTitle = $topMainvisual['mainvisual_content'];

$topSection2 = get_field('top_section2', 'option');
$topSection2Bg = $topSection2['sct2_bg'];
$topSection2Item1 = $topSection2['top_section2_item1'];
$topSection2Item1Image = $topSection2Item1['item_1_image'];
$topSection2Item1Content = $topSection2Item1['item1_content'];
$topSection2Item2 = $topSection2['top_section2_item2'];
$topSection2Item2Image = $topSection2Item2['item_2_image'];
$topSection2Item2Content = $topSection2Item2['item2_content'];
$topSection2Item3 = $topSection2['top_section2_item3'];
$topSection2Item3Image = $topSection2Item3['item_3_image'];
$topSection2Item3Content = $topSection2Item3['item3_content'];
$topSection2Item4 = $topSection2['top_section2_item4'];
$topSection2Item4Image = $topSection2Item4['item_4_image'];
$topSection2Item4Content = $topSection2Item4['item4_content'];

?>

<main class="p-top">
	<div class="p-top__swiper swiper js-slide-top">
		<div class="p-top__wrapper swiper-wrapper">
			<div class="p-top__item">
				<div class="p-top1">
					<div class="c-mv1" style="background-image: url('<?php if (!empty($topMainvisualBg)):
						echo $topMainvisualBg['url']; endif;?>')">
						<div class="l-container">
							<?php if(!empty($topMainvisualTitle)) :?>
							<h2 class="c-mv1__ttl1"><?php echo $topMainvisualTitle;?></h2>
							<?php endif;?>
						</div>
						<div class="c-mv1__weather">
							<p class="c-mv1__text2"><?php _e('Today&lsquo;s opening hours','mizuki');?></p>
							<p class="c-mv1__text3"><?php if(!empty($openingHours)) :?><?php echo $openingHours;?><?php else:?>00:00<?php endif;?>~<?php if(!empty($closingHours)) :?><?php echo $closingHours;?><?php else:?>00:00<?php endif;?></p>
							<a href="<?php echo home_url(); ?>/contact/" class="c-btn2"><?php _e('CONTACT NOW','mizuki');?></a>
						</div>
					</div>
				</div>
			</div>

			<div class="p-top__item">
				<div class="p-top2" style="background-image: url('<?php if (!empty($topSection2Bg)):
						echo $topSection2Bg['url']; endif;?>')">
					<div class="l-container">
						<div class="c-block1">
							<div class="c-block1__wrap is-top">
								<?php if(!empty($topSection2Item1Content)) :?>
									<div class="c-block1__item">
										<div class="c-block1__inner"><img src="<?php echo $topSection2Item1Image['url'];?>" alt="<?php echo $topSection2Item1Image['alt'];?>"></div>
										<p class="c-block1__text1"><?php echo $topSection2Item1Content;?></p>
									</div>
								<?php endif;?>
								<?php if(!empty($topSection2Item2Content)) :?>
								<div class="c-block1__item">
									<div class="c-block1__inner"><img src="<?php echo $topSection2Item2Image['url'];?>" alt="<?php echo $topSection2Item2Image['alt'];?>"></div>
									<p class="c-block1__text1"><?php echo $topSection2Item2Content;?></p>
								</div>
								<?php endif;?>
							</div>
							<div class="c-block1__main1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-w.svg" alt="MIZUKI">
							</div>
							<div class="c-block1__wrap">
								<?php if(!empty($topSection2Item3Content)) :?>
								<div class="c-block1__item">
									<div class="c-block1__inner"><img src="<?php echo $topSection2Item3Image['url'];?>" alt="<?php echo $topSection2Item3Image['alt'];?>"></div>
									<p class="c-block1__text1"><?php echo $topSection2Item3Content;?></p>
								</div>
								<?php endif;?>
								<?php if(!empty($topSection2Item4Content)) :?>
								<div class="c-block1__item">
									<div class="c-block1__inner"><img src="<?php echo $topSection2Item4Image['url'];?>" alt="<?php echo $topSection2Item4Image['alt'];?>"></div>
									<p class="c-block1__text1"><?php echo $topSection2Item4Content;?></p>
								</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="p-top__item">
				<div class="p-top3">
					<div class="l-container">
						<div class="p-top3__inner">
						<h3 class="c-title1"><?php _e('PRODUCTS','mizuki');?></h3>

						<?php
							$products_query = new WP_Query();
							$product_param = array(
								'post_type' => 'products',
								'posts_per_page' => '3'
							);
							$products_query->query($product_param);
							if($products_query->have_posts()): ?>
						<ul class="c-list1">
							<?php while($products_query->have_posts()) : $products_query->the_post();?>
							<li class="c-list1__item">
								<a href="<?php the_permalink(); ?>" class="c-list1__link">
									<div class="c-list1__img">
										<?php if (has_post_thumbnail()): ?>
											<?php the_post_thumbnail('products-thumbnail'); ?>
										<?php else:?>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/img-comingsoon.jpg" alt="MIZUKI">
										<?php endif?>
									</div>
									<div class="c-list1__detail">
										<?php $terms = wp_get_object_terms($post->ID, 'products_tax'); ?>
										<p class="c-list1__cat1"><?php echo $terms[0]->name; ?></p>
										<p class="c-list1__text1"><?php the_title()?></p>
										<p class="c-list1__text2"><span>Detail</span></p>
									</div>
								</a>
							</li>
							<?php endwhile;?>
						</ul>
						<?php else:?>
							<p class="c-text1"><?php _e('There are currently no posts.','mizuki');?></p>
						<?php endif;?>

						<a href="<?php echo home_url(); ?>/products/" class="c-btn1 is-center"><?php _e('VIEW MORE','mizuki');?></a>
					</div>
					</div>
				</div>
			</div>

			<div class="p-top__item">
				<div class="p-top5">
					<div class="p-top5__inner">
						<h3 class="c-title1"><?php _e('PROJECTS','mizuki');?></h3>

						<?php
							$projects_query = new WP_Query();
							$projects_param = array(
								'post_type' => 'projects',
							);
							$projects_query->query($projects_param);
							if($projects_query->have_posts()):
						?>
						<div class="c-slider2 swiper js-slide2">
							<ul class="c-slider2__wrapper swiper-wrapper is-slide">

							<?php while($projects_query->have_posts()) : $projects_query->the_post();?>
								<li class="c-slider2__item swiper-slide">
									<figure>
										<?php if (has_post_thumbnail()): ?>
												<?php the_post_thumbnail('projects-thumbnail'); ?>
										<?php else:?>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/img-comingsoon.jpg" alt="MIZUKI">
										<?php endif?>
									</figure>
								</li>
								<?php endwhile;?>

							</ul>
							<div class="swiper-pagination"></div>
						</div>
						<?php else: ?>
							<p class="c-text1"><?php _e('There are currently no posts.','mizuki');?></p>
						<?php endif; wp_reset_query();?>


						<a href="<?php echo home_url(); ?>/projects/" class="c-btn1 is-center"><?php _e('VIEW MORE','mizuki');?></a>
					</div>
				</div>
			</div>

			<div class="p-top__item">
				<div class="p-top6">
					<div class="p-top6__inner">
						<div class="c-gallery1__block1">
							<?php $images = get_field('top_gallery', 'option');
							if( $images ):?>
							<ul class="c-gallery1">
								<?php $x = 1; while ( $x <= 2):?>
								<?php foreach( $images as $image ): ?>
								<li class="c-gallery1__item">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</li>
								<?php endforeach; ?>
								<?php $x++; endwhile;?>
							</ul>
							<?php endif;?>

						</div>

						<?php include(get_template_directory().'/includes/footer.php');?>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</main>

<?php get_footer() ?>
