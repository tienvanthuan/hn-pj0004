<?php get_header();

$aboutMainvisual = get_field('ab_mainvisual');

$aboutSct1 = get_field('ab_about');
$aboutSct1Content = $aboutSct1['ab_about__content'];
$aboutSct1Image = $aboutSct1['ab_about__image'];

$aboutSct2 = get_field('ab_section_2');
$aboutSct2Title = $aboutSct2['ab_section_2__title'];
$aboutSct2Content = $aboutSct2['ab_section_2__content'];
$aboutSct2Image = $aboutSct2['ab_section_2__image'];

$aboutParameter = get_field('ab_parameter');
$aboutSct2Projects = $aboutParameter['parameter_projects'];
$aboutSct2ProjectsImg = $aboutSct2Projects['param_projects__img'];
$aboutSct2ProjectsNumber = $aboutSct2Projects['param_projects__number'];

$aboutSct2Branch = $aboutParameter['parameter_branch'];
$aboutSct2BranchImg = $aboutSct2Branch['param_branch__img'];
$aboutSct2BranchNumber = $aboutSct2Branch['param_branch__number'];

$aboutSct2Staff = $aboutParameter['parameter_staff'];
$aboutSct2StaffImg = $aboutSct2Staff['param_staff__img'];
$aboutSct2StaffNumber = $aboutSct2Staff['param_staff__number'];

$aboutSct2Products = $aboutParameter['parameter_products'];
$aboutSct2ProductsImg = $aboutSct2Products['param_products__img'];
$aboutSct2ProductsNumber = $aboutSct2Products['param_products__number'];

$hourWorking = get_field('hour_working', 'option');
$openingHours = $hourWorking['opening_hours'];
$closingHours = $hourWorking['closing_hours'];
$address = get_field('address', 'option');
$phoneNumber = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<style>
	.c-block3::after {
		background-image: url(<?php echo $aboutSct2Image['url'];?>)
	}
</style>

<main class="p-about">
	<section class="p-about1">
		<div class="c-mv2" <?php if (!empty($aboutMainvisual)): ?>style="background-image: url('<?php echo $aboutMainvisual['url']; ?>')"<?php endif;?> >
			<h2 class="c-mv2__ttl1"><?php _e('ABOUT MIZUKI','mizuki');?></h2>
		</div>
	</section>

	<section class="p-about2">
		<div class="l-container">
			<h3 class="c-title2 is-center js-animation fadeInUp"><?php _e('ABOUT MIZUKI','mizuki');?></h3>

			<?php if(!empty($aboutSct1Content)) :?>
			<div class="c-block2 js-animation fadeInUp">
				<p class="c-block2__text1"><?php echo $aboutSct1Content;?></p>
				<figure class="c-block2__img">
					<img src="<?php echo $aboutSct1Image['url'];?>" alt="<?php echo $aboutSct1Image['alt'];?>">
				</figure>
			</div>
			<?php endif;?>
		</div>
	</section>

	<section class="p-about3">
		<div class="l-container">
			<h3 class="c-title2 js-animation fadeInUp"><?php _e('WHY IS MIZUKI?','mizuki');?></h3>

			<?php if(!empty($aboutSct2Content)) :?>
			<div class="c-block3">
				<div class="c-block3__inner js-animation fadeInUp">
					<?php if(!empty($aboutSct2Title)) :?>
					<h4 class="c-title3"><?php echo $aboutSct2Title;?></h4>
					<?php endif;?>
					<p class="c-block3__text1"><?php echo $aboutSct2Content;?></p>
				</div>
			</div>
			<?php endif;?>
		</div>
	</section>

	<section class="p-about4">
		<div class="l-container">
			<div class="c-block1 is-style2">
				<div class="c-block1__wrap is-top">
					<?php if(!empty($aboutSct2Projects)) :?>
					<div class="c-block1__item js-animation fadeInUp">
						<div class="c-block1__inner"><img src="<?php echo $aboutSct2ProjectsImg['url'];?>" alt="<?php echo $aboutSct2ProjectsImg['alt'];?>"></div>
						<p class="c-block1__text1"><?php echo $aboutSct2ProjectsNumber;?>+ <?php _e('Projects','mizuki');?></p>
					</div>
					<?php endif;?>
					<?php if(!empty($aboutSct2Branch)) :?>
					<div class="c-block1__item js-animation fadeInUp">
						<div class="c-block1__inner"><img src="<?php echo $aboutSct2BranchImg['url'];?>" alt="<?php echo $aboutSct2BranchImg['alt'];?>"></div>
						<p class="c-block1__text1"><?php echo $aboutSct2BranchNumber;?>+ <?php _e('Branch','mizuki');?></p>
					</div>
					<?php endif;?>
				</div>
				<div class="c-block1__main1 js-animation fadeInUp">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-o.svg" alt="MIZUKI">
				</div>
				<div class="c-block1__wrap">
					<?php if(!empty($aboutSct2Staff)) :?>
					<div class="c-block1__item js-animation fadeInUp">
						<div class="c-block1__inner"><img src="<?php echo $aboutSct2StaffImg['url'];?>" alt="<?php echo $aboutSct2StaffImg['alt'];?>"></div>
						<p class="c-block1__text1"><?php echo $aboutSct2StaffNumber;?>+ <?php _e('Staff','mizuki');?></p>
					</div>
					<?php endif;?>
					<?php if(!empty($aboutSct2Products)) :?>
					<div class="c-block1__item js-animation fadeInUp">
						<div class="c-block1__inner"><img src="<?php echo $aboutSct2ProductsImg['url'];?>" alt="<?php echo $aboutSct2ProductsImg['alt'];?>"></div>
						<p class="c-block1__text1"><?php echo $aboutSct2ProductsNumber;?>+ <?php _e('Products','mizuki');?></p>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</section>

	<section class="p-about5">
		<div class="l-container">
			<h3 class="c-title2 is-center js-animation fadeInUp"><?php _e('VISION & MISSION','mizuki');?></h3>
		</div>

		<?php if( have_rows('vision_mission') ):?>
		<div class="c-block4">
			<?php while( have_rows('vision_mission') ) : the_row();
				$abvmItem = get_sub_field('vision_mission_inner');
				$abvmItemTitle = $abvmItem['inner_title'];
				$abvmItemContent = $abvmItem['inner_content'];
				$abvmItemImage = $abvmItem['inner_image'];
			?>
			<div class="c-block4__inner js-animation fadeInUp">
				<div class="c-block4__content">
					<h4 class="c-title3"><?php echo $abvmItemTitle;?></h4>
					<div class="c-block4__text1"><?php echo $abvmItemContent;?></div>
				</div>
				<div class="c-block4__img">
					<img src="<?php echo $abvmItemImage['url'];?>" alt="<?php echo $abvmItemImage['alt'];?>">
				</div>
			</div>
			<?php endwhile;?>
		</div>
		<?php endif;?>

		<?php $imagesGallery = get_field('ab_gallery');
		if($imagesGallery) :?>
		<div class="l-container">
			<div class="c-block5">
				<?php foreach( $imagesGallery as $imageGallery ): ?>
				<div class="c-block5__inner js-animation fadeInUp">
					<img src="<?php echo esc_url($imageGallery['url']); ?>" alt="<?php echo esc_attr($imageGallery['alt']); ?>">
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
	</section>

	<section class="p-about6">
		<div class="l-container">
			<h3 class="c-title2 is-center js-animation fadeInUp"><?php _e('DEVELOPMENT STRATEGY','mizuki');?></h3>

			<?php if( have_rows('development_strategy') ):?>
			<ul class="c-list2">
				<?php while( have_rows('development_strategy') ) : the_row();
					$itemDs = get_sub_field('development_strategy_item');
					$itemImage = $itemDs['ds_image'];
					$itemTitle = $itemDs['ds_title'];
					$itemContent = $itemDs['ds_content'];
				?>
				<li class="c-list2__item js-animation fadeInUp">
					<div class="c-list2__img">
						<img src="<?php echo $itemImage['url'];?>" alt="<?php echo $itemImage['alt'];?>">
					</div>
					<div class="c-list2__content">
						<h4 class="c-list2__ttl1"><?php echo $itemTitle;?></h4>
						<div class="c-list2__text1"><?php echo $itemContent;?></d>
					</div>
				</li>
				<?php endwhile;?>
			</ul>
			<?php else: ?>
			<?php endif; ?>
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
				<span class="c-breadcrumb__text"><?php _e('ABOUT','mizuki');?></span>
			</li>
		</ul>
	</div>
</main>

<?php get_footer() ?>
