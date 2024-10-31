<?php
/*
Plugin Name: Post Is Clear
Plugin URI: http://steelwhitetable.org
Description: Adds &lt;br clear="all"/&gt; to the end of posts, to ensure images and objects don't wrap into successive posts.
Version: 1.0
Author: Jody Cairns
Author URI: http://steelwhitetable.org/
*/

function swt_clear_the_post($content = '') {  
  return $content.'<br clear="all"/>';
}

add_filter('the_content','swt_clear_the_post');