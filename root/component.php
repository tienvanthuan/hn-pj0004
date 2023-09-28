<?php
require_once( 'wp-load.php' );
require_once( get_template_directory().'/header.php' );
?>

<?php /*========================================
breadcrumb
================================================*/ ?>
<div class="c-dev-title1">breadcrumb</div>
<?php include(get_template_directory().'/includes/breadcrumb.php'); ?>

<?php /*========================================
component
================================================*/ ?>
<?php include(get_template_directory().'/includes/component/01_btn.php'); ?>
<?php include(get_template_directory().'/includes/component/02_title.php'); ?>
<?php include(get_template_directory().'/includes/component/03_icon.php'); ?>
<?php include(get_template_directory().'/includes/component/04_form.php'); ?>
<?php include(get_template_directory().'/includes/component/05_text.php'); ?>
<?php include(get_template_directory().'/includes/component/06_navi.php'); ?>
<?php include(get_template_directory().'/includes/component/07_img.php'); ?>
<?php include(get_template_directory().'/includes/component/08_list.php'); ?>
<?php include(get_template_directory().'/includes/component/09_table.php'); ?>
<?php include(get_template_directory().'/includes/component/10_line.php'); ?>
<?php include(get_template_directory().'/includes/component/11_video.php'); ?>
<?php include(get_template_directory().'/includes/component/12_slide.php'); ?>
<?php include(get_template_directory().'/includes/component/13_mv.php'); ?>
<?php include(get_template_directory() . '/includes/component/14_block.php'); ?>
<?php include(get_template_directory().'/includes/component/99_other.php'); ?>

<?php /*========================================
side
================================================*/ ?>
<div class="c-dev-title1">side</div>
<?php include(get_template_directory().'/sidebar.php'); ?>

<?php require_once( get_template_directory().'/footer.php' ); ?>