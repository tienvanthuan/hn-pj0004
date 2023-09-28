<?php
function path_code(){
  return get_template_directory_uri();
}

function path_url(){
  return home_url();
}

// 固定ページ流し込み用
// src="[path]/assets/images/xxx"
add_shortcode('path', 'path_code');
// href="[url]/xxx/"
add_shortcode('url', 'path_url');