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

	<section class="p-news3">
		<div class="l-container2">

			<div class="c-content1 js-animation fadeInUp">
				<h3 class="c-content1__ttl1"><?php the_title()?></h3>
				<time class="c-content1__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
				<?php
				$news_content = get_field('news_content');
				if(!empty($news_content)) :?>
					<div class="c-content1__wp">
						<?php echo $news_content;?>
					</div>
				<?php endif;?>
			</div>

			<ul class="c-pagi2 js-animation fadeInUp">
				<li class="c-pagi2__item c-pagi2__prev">
					<?php previous_post_link( '%link', '<span>PREV</span>'); ?>
				</li>
				<li class="c-pagi2__item c-pagi2__next">
					<?php next_post_link( '%link', '<span>NEXT</span>'); ?>
				</li>
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
				<a href="<?php echo home_url('/'); ?>news" class="c-breadcrumb__text"><?php _e('NEWS','mizuki');?></a>
			</li>
			<li class="c-breadcrumb__item">
				<span class="c-breadcrumb__text"><?php the_title()?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
