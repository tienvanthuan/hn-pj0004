<?php get_header();

$urlMap = get_field('contact_map', 'option');
$messageConfirm = get_field('message_confirm', 'option');

$companyName = get_field('company_name', 'option');
$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<main class="p-contact">
	<?php if(!empty($urlMap)) :?>
	<section class="p-contact1">
		<div class="c-mv2">
			<iframe src="<?php echo $urlMap;?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<?php endif;?>

	<section class="p-contact2">
		<div class="l-container">
			<div class="p-contact2__inner">
				<div class="p-contact2__block p-contact2__block1 js-animation fadeInUp">
					<h2 class="c-title1 is-large"><?php _e('CONTACT', 'mizuki'); ?></h2>

					<?php if(!empty($companyName)) :?>
					<h3 class="p-contact2__ttl1"><?php echo $companyName;?></h3>
					<?php endif;?>

					<?php if(!empty($openingHours)) :?>
					<p class="c-contact1__text1"><?php _e('Hour working:', 'mizuki'); ?> <?php echo $openingHours; ?> - <?php echo $closingHours;?></p>
					<?php endif;?>

					<?php if(!empty($phoneNumber)) :?>
					<p class="c-contact2__text1"><?php _e('Hotline:', 'mizuki'); ?><a href="tel:+<?php echo $phoneNumber;?>" class="u-tel"> <?php echo $phoneNumber;?></a></p>
					<?php endif;?>

					<?php if(!empty($email)) :?>
					<p class="c-contact2__text1"><?php _e('Emai:', 'mizuki'); ?><a href="mailto: <?php echo $email;?>" class="u-tel"> <?php echo $email;?></a></p>
					<?php endif;?>

					<?php if(!empty($address)) :?>
					<p class="c-contact2__text1"><?php _e('Address:', 'mizuki'); ?> <?php echo $address;?></p>
					<?php endif;?>
				</div>
				<div class="p-contact2__block p-contact2__block2 js-animation fadeInUp">
					<div class="c-form1">
						<div class="c-form__text1"><?php echo $messageConfirm;?></div>
						<div class="c-form1__wrapper">
							<?php $lang = get_bloginfo("language");
								if ($lang == 'en-US') {
								echo do_shortcode('[mwform_formkey key="280"]');
								} else {
								echo do_shortcode('[mwform_formkey key="471"]');
							}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>
