<?php get_header();

$newsMainvisual = get_field('news_mainvisual', 'option');

$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<main class="p-news">
	<section class="p-news1">
		<div class="c-mv2" <?php if (!empty($newsMainvisual)): ?>style="background-image: url('<?php echo $newsMainvisual['url']; ?>')"<?php endif;?> >
			<h2 class="c-mv2__ttl1"><?php _e('NEWS','mizuki');?></h2>
		</div>
	</section>

	<section class="p-news2">
		<div class="l-container2">
				<ul class="c-list1">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				$news_content = get_field('news_content');
				?>
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
							<time class="c-list1__cat1" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
							<p class="c-list1__text1"><?php the_title()?></p>
							<?php
								$news_content = substr($news_content, 0, 60);
								$result = substr($news_content, 0, strrpos($news_content, ' '));?>
							<div class="c-list1__text3"><?php echo $result;?></div>
						</div>
					</a>
				</li>
				<?php endwhile;?>
				<?php else:?>
					<p class="c-text1"><?php _e('There are currently no posts.','mizuki');?></p>
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
				<span class="c-breadcrumb__text"><?php _e('NEWS','mizuki');?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
