<?php get_header();

$ppMainvisual = get_field('pp_mainvisual');

$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<main class="p-pp">
	<section class="p-pp1">
		<div class="c-mv2" <?php if (!empty($faqMainvisual)): ?>style="background-image: url('<?php echo $faqMainvisual['url']; ?>')"<?php endif;?> >
			<h2 class="c-mv2__ttl1"><?php _e('PRIVACY POLICY','mizuki');?></h2>
		</div>
	</section>

	<section class="p-pp2">
		<div class="l-container2">
			<?php if( have_rows('pp_content') ):?>
			<div class="c-block7 js-animation fadeInUp">
				<?php while( have_rows('pp_content') ) : the_row();
				$pp_title = get_sub_field('pp_title');
				$pp_reading = get_sub_field('pp_reading');
				?>
				<div class="c-block7__inner">
					<h3 class="c-block7__ttl1"><?php echo $pp_title; ?></h3>
					<p class="c-block7__text1"><?php echo $pp_reading; ?></p>
				</div>
				<?php endwhile;?>
			</div>
			<?php endif;?>
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
				<span class="c-breadcrumb__text"><?php _e('PRIVACY POLICY','mizuki');?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
