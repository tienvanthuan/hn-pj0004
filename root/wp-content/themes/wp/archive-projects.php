<?php get_header();

$projectsMainvisual = get_field('pj_mainvisual', 'option');

$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<main class="p-projects">
	<section class="p-projects1">
		<div class="c-mv2" <?php if (!empty($projectsMainvisual)): ?>style="background-image: url('<?php echo $projectsMainvisual['url']; ?>')"<?php endif;?> >
			<h2 class="c-mv2__ttl1"><?php _e('PROJECTS','mizuki');?></h2>
		</div>
	</section>

	<section class="p-projects2">
		<div class="l-container">
			<ul class="c-list4">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				$pj_investor = get_field('pj_investor');
				$pj_location = get_field('pj_location');
				$pj_product = get_field('pj_product');
				$pj_design_code = get_field('pj_design_code');
				$pj_quantity = get_field('pj_quantity');
				?>
				<li class="c-list4__item js-animation fadeInUp">
					<figure class="c-list4__img">
						<?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('projects-thumbnail'); ?>
            <?php else:?>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/img-comingsoon.jpg" alt="MIZUKI">
            <?php endif?>
					</figure>
					<div class="c-list4__flex">
						<div class="c-list4__content">
							<dl>
								<dt>Name project:</dt>
								<dd><?php the_title();?></dd>
							</dl>

							<?php if(!empty($pj_investor)) :?>
							<dl>
								<dt>Investor:</dt>
								<dd><?php echo $pj_investor;?></dd>
							</dl>
							<?php endif;?>

							<?php if(!empty($pj_location)) :?>
							<dl>
								<dt>Location:</dt>
								<dd><?php echo $pj_location;?></dd>
							</dl>
							<?php endif;?>
						</div>
						<div class="c-list4__content">
							<?php if(!empty($pj_product)) :?>
							<dl>
								<dt>Product:</dt>
								<dd><?php echo $pj_product;?></dd>
							</dl>
							<?php endif;?>

							<?php if(!empty($pj_design_code)) :?>
							<dl>
								<dt>Design code:</dt>
								<dd><?php echo $pj_design_code;?></dd>
							</dl>
							<?php endif;?>

							<?php if(!empty($pj_quantity)) :?>
							<dl>
								<dt>Quantity:</dt>
								<dd><?php echo $pj_quantity;?></dd>
							</dl>
							<?php endif;?>
						</div>
					</div>
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
				<span class="c-breadcrumb__text"><?php _e('PROJECTS','mizuki');?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
