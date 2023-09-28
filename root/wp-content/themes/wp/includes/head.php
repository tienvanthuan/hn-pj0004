<?php include(get_template_directory().'/includes/meta.php');?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="<?php echo $description ?>">

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_favicon.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_favicon.ico">

	<meta property="og:locale" content="<?php language_attributes(); ?>">
  <meta property="og:url" content="">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:description" content="<?php echo $description ?>">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $title ?>">
  <meta name="twitter:description" content="<?php echo $description ?>">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/index.js" defer></script>
  <?php if($scripts){ ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pages/<?php echo $pageid ?>/index.js" defer></script>
  <?php } ?>
<?php wp_head(); ?>
</head>
