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

	<section class="p-products2">
		<div class="l-container">
			<h3 class="c-title2 is-center js-animation fadeInUp"><?php _e('INTRODUCTION PRODUCT','mizuki');?></h3>
		</div>

		<?php if( have_rows('pd_introduction', 'option') ):?>
		<div class="c-block4">
			<?php while( have_rows('pd_introduction', 'option') ) : the_row();
				$pdIntroItem = get_sub_field('pd_introduction_inner');
				$pdIntroItemTitle = $pdIntroItem['inner_title'];
				$pdIntroItemContent = $pdIntroItem['inner_content'];
				$pdIntroItemImage = $pdIntroItem['inner_image'];
			?>
			<div class="c-block4__inner js-animation fadeInUp">
				<div class="c-block4__content">
					<h4 class="c-title3"><?php echo $pdIntroItemTitle;?></h4>
					<p class="c-block4__text1"><?php echo $pdIntroItemContent;?></p>
				</div>
				<div class="c-block4__img">
					<img src="<?php echo $pdIntroItemImage['url'];?>" alt="<?php echo $pdIntroItemImage['alt'];?>">
				</div>
			</div>
			<?php endwhile;?>
		</div>
		<?php endif;?>

		<?php if( have_rows('pd_introduction_flow', 'option') ):?>
		<div class="l-container">
			<ul class="c-list3">
				<?php while( have_rows('pd_introduction_flow', 'option') ) : the_row();
					$pdFlowItem = get_sub_field('flow_item');
					$pdFlowItemImage = $pdFlowItem['flow_image'];
					$pdFlowItemContent = $pdFlowItem['flow_content'];
				?>
				<li class="c-list3__item js-animation fadeInUp">
					<div class="c-list3__img">
						<img src="<?php echo $pdFlowItemImage['url'];?>" alt="<?php echo $pdFlowItemImage['alt'];?>">
					</div>
					<p class="c-list3__text1"><?php echo $pdFlowItemContent;?></p>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif;?>
	</section>

	<section class="p-products3">
		<div class="l-container2">

			<ul class="c-list1">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="c-list1__item js-animation fadeInUp">
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
				<?php else:?>
					<p class="txt-nopost"><?php _e('There are currently no posts.','mizuki');?></p>
				<?php endif;?>
			</ul>

			<div class="c-pagi js-animation fadeInUp">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } wp_reset_query(); ?>
			</div>
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
				<span class="c-breadcrumb__text"><?php _e('PRODUCTS','mizuki');?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
