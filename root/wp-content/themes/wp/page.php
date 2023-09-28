<?php get_header() ?>

<main>
<?php

//管理画面で編集するページ
// if(
// 	is_page("xxx")
// ) {
while (have_posts()){ the_post();the_content();}

//テンプレート埋め込み
// }else{

// include(get_template_directory().'/libs/page/'.get_page($page_id)->post_name.'.php');

// }?>
</main>

<?php get_footer() ?>
