<?php get_header();

$productsMainvisual = get_field('pd_mainvisual', 'option');

$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<main class="p-products">
	<section class="p-products1">
		<div class="c-mv2" <?php if (!empty($productsMainvisual)): ?>style="background-image: url('<?php echo $productsMainvisual['url']; ?>')"<?php endif;?> >
			<h2 class="c-mv2__ttl1"><?php _e('PRODUCTS','mizuki');?></h2>
		</div>
	</section>

	<section class="p-products4">
		<div class="l-container">
			<div class="c-block6 js-animation fadeInUp">
				<?php $imagesProduct = get_field('pd__gallery');
				if( $imagesProduct ): ?>
				<div class="c-block6__gallery c-slider3">
					<div class="c-slider3__main swiper js-slide4-main">
						<div class="swiper-wrapper">
							<?php foreach( $imagesProduct as $imageProduct ): ?>
							<div class="swiper-slide">
								<img src="<?php echo esc_url($imageProduct['url']); ?>" alt="<?php echo esc_url($imageProduct['alt']); ?>">
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div thumbsSlider="" class="c-slider3__nav swiper js-slide4-nav">
						<div class="swiper-wrapper">
							<?php foreach( $imagesProduct as $imageProduct ): ?>
							<div class="swiper-slide">
								<img src="<?php echo esc_url($imageProduct['url']); ?>" alt="<?php echo esc_url($imageProduct['alt']); ?>">
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="c-block6__information">
					<h3 class="c-block6__ttl1"><?php the_title()?></h3>
					<?php if( have_rows('pd__information') ): ?>
					<div class="c-block6__table">
						<?php while( have_rows('pd__information') ): the_row();
            $title = get_sub_field('pd__information-title');
						$detail = get_sub_field('pd__information-detail');?>
						<dl>
							<dt><?php echo $title; ?></dt>
							<dd><?php echo $detail; ?></dt>
						</dl>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>

					<a href="<?php echo home_url('/'); ?>contact/?post_id=<?php echo $post->ID; ?>" class="c-btn2">CONTACT</a>
				</div>
			</div>

			<?php if( have_rows('pd__fac') ): ?>
			<h3 class="c-title4 js-animation fadeInUp"><?php _e('Product features and characteristics','mizuki');?></h3>

			<ul class="c-list3 is-style2 js-animation fadeInUp">
				<?php while( have_rows('pd__fac') ): the_row();
          $icon = get_sub_field('pd__fac-icon');
					$title = get_sub_field('pd__fac-title');?>
				<li class="c-list3__item">
					<div class="c-list3__img">
						<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_url($icon['alt']); ?>">
					</div>
					<p class="c-list3__text1"><?php echo $title;?></p>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

		</div>
	</section>

	<section class="p-products5">
		<div class="l-container2">
			<h3 class="c-title2 is-center js-animation fadeInUp"><?php _e('RELATED PRODUCTS','mizuki');?></h3>

			<ul class="c-list1 js-animation fadeInUp">
				<?php
					$wp_query = new WP_Query();
					$terms = get_the_terms(get_the_ID(), 'products_tax');
					$categoryProduct = $terms[0]->slug;
					$args = array(
						'post_type' => 'products',
						'posts_per_page' => 3,
						'products_tax' => $categoryProduct
					);
					$wp_query-> query($args);
					if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
					?>
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
							<?php
                $terms = wp_get_object_terms($post->ID, 'products_tax');
              ?>
							<p class="c-list1__cat1"><?php echo $terms[0]->name; ?></p>
							<p class="c-list1__text1"><?php the_title()?></p>
							<p class="c-list1__text2"><span><?php _e('Detail','mizuki');?></span></p>
						</div>
					</a>
				</li>
				<?php endwhile;?>
				<?php endif;?>
			</ul>
		</div>
	</section>

	<div class="c-contact1 js-animation fadeInUp">
		<div class="l-container c-contact1__inner">
			<h4 class="c-contact1__ttl1"><?php _e('Contact us, to have the right design for you!!!','mizuki');?></h4>
			<a href="<?php echo home_url(); ?>/contact/" class="c-btn1"><?php _e('VIEW MORE','mizuki');?></a>
			<p class="c-contact1__text1"><?php _e('Hour working:', 'mizuki'); ?> <?php echo $openingHours; ?> - <?php echo $closingHours;?></p>
			<a href="tel:+<?php echo $phoneNumber; ?>" class="c-contact1__text1 u-tel"><?php _e('Tel:','mizuki');?> <?php echo $phoneNumber; ?></a><br>
			<a href="mailto:<?php echo $email; ?>" class="c-contact1__text1"><?php _e('Email:','mizuki');?> <?php echo $email; ?></a>
		</div>
	</div>

	<div class="l-container">
		<ul class="c-breadcrumb">
			<li class="c-breadcrumb__item">
				<a href="<?php echo home_url('/'); ?>" class="c-breadcrumb__text"><?php _e('HOME','mizuki');?></a>
			</li>
			<li class="c-breadcrumb__item">
				<a href="<?php echo home_url('/'); ?>products" class="c-breadcrumb__text"><?php _e('PRODUCTS','mizuki');?></a>
			</li>
			<li class="c-breadcrumb__item">
				<span class="c-breadcrumb__text"><?php the_title()?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
