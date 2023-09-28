<?php
	$address = get_field('address', 'option');
	$phoneNumber = get_field('phone_number', 'option');
	$email = get_field('email', 'option');
?>

<footer class="c-footer">
	<div class="c-footer__inner l-container">
		<div class="c-footer__block">
			<a href="#" class="c-footer__logo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-o.svg" alt="MIZUKI">
			</a>
			<div class="c-footer__information">
				<?php if(!empty($address)) :?>
				<p class="c-footer__text1"><?php echo $address;?></p>
				<?php endif;?>

				<?php if(!empty($phoneNumber)) :?>
				<a href="tel:+<?php echo $phoneNumber;?>" class="c-footer__text1 u-tel"><?php _e('Tel:','mizuki');?> <?php echo $phoneNumber;?></a><br>
				<?php endif;?>

				<?php if(!empty($email)) :?>
				<a href="tel:+<?php echo $email;?>" class="c-footer__text1 u-tel"><?php _e('Email:','mizuki');?> <?php echo $email;?></a>
				<?php endif;?>
			</div>
		</div>
		<div class="c-footer__nav">
			<ul class="c-footer__menu1">
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/about/" class="c-footer__link"><?php _e('ABOUT','mizuki');?></a>
				</li>
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/products/" class="c-footer__link"><?php _e('PRODUCTS','mizuki');?></a>
				</li>
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/projects/" class="c-footer__link"><?php _e('PROJECTS','mizuki');?></a>
				</li>
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/news/" class="c-footer__link"><?php _e('NEWS','mizuki');?></a>
				</li>
			</ul>

			<ul class="c-footer__menu1">
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/contact/" class="c-footer__link"><?php _e('CONTACT','mizuki');?></a>
				</li>
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/privacy-policy/" class="c-footer__link"><?php _e('PRIVACY POLICY','mizuki');?></a>
				</li>
				<li class="c-footer__item">
					<a href="<?php echo home_url(); ?>/faq/" class="c-footer__link"><?php _e('FAQ','mizuki');?></a>
				</li>
			</ul>
		</div>
	</div>
	<p class="c-footer__copyright">©MIZUKI 2023 All Rights Reserved.</p>
</footer>
