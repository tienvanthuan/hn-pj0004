<?php include(get_template_directory().'/includes/head.php');?>

<body class="page-<?php echo $pageid ?>">

<?php if (is_front_page() || is_home()):?>
<div class="c-loading js-loading is-loading">
	<span class="c-loading__logo"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-o.svg" alt="MIZUKI"></span>
</div>
<?php endif;?>

<div class="l-wrapper">

<header class="c-header js-header <?php if (is_front_page() || is_home() || is_page('contact') || is_page(25) || is_page(20)): ?>is-top<?php endif;?>">
  <div class="c-header__inner">
		<h1 class="c-header__logo">
			<a href="<?php echo home_url('/'); ?>" class="c-header__linklogo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-w.svg" alt="MIZUKI" class="is-logo-w">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-o.svg" alt="MIZUKI" class="is-logo-o is-hide">
			</a>
		</h1>
		<div class="c-header__nav">
			<div class="c-header__navmenu js-navmenu">
				<ul class="c-header__menu">
					<li class="c-header__item">
						<a href="<?php echo home_url('/'); ?>about/" class="c-header__link"><?php _e('ABOUT','mizuki');?></a>
					</li>
					<li class="c-header__item">
						<a href="<?php echo home_url('/'); ?>products/" class="c-header__link"><?php _e('PRODUCTS','mizuki');?></a>
					</li>
					<li class="c-header__item">
						<a href="<?php echo home_url('/'); ?>projects/" class="c-header__link"><?php _e('PROJECTS','mizuki');?></a>
					</li>
					<li class="c-header__item">
						<a href="<?php echo home_url('/'); ?>news/" class="c-header__link"><?php _e('NEWS','mizuki');?></a>
					</li>
					<li class="c-header__item">
						<a href="<?php echo home_url('/'); ?>contact/" class="c-header__link"><?php _e('CONTACT','mizuki');?></a>
					</li>
				</ul>
			</div>
			<div class="c-header__language">
				<?php echo do_shortcode('[wpml_language_selector_widget]')?>
			</div>
			<div class="c-header__iconmenu js-iconmenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</header>
