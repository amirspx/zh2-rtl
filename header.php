<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- <title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(); ?> | <?php bloginfo('name'); ?> |</title> -->
	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("بایگانی برچسب &quot;"); echo '&quot; | '; }
		      elseif (is_archive()) {
		         wp_title("بایگانی&nbsp;"); echo ' | '; 
		      }
		      elseif (is_search()) {
		         echo 'جستجو برای &quot;'.wp_specialchars($s).'&quot; | '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'یافت نشد | '; }
		      if (is_home()) {
		         bloginfo('name'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - صفحه '. $paged; }
		   ?>
	</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="favicon.ico" /> 
	<link rel="author" href="https://plus.google.com/101993187504535260241" />
	<link rel="publisher" href="https://plus.google.com/101993187504535260241" />
	<!-- Google Analytics -->
	<!-- End of Google Analytics -->
	
	<!-- Twitter Cards -->
    <!-- End of Twitter Cards -->

	<?php wp_head(); ?>

</head>
<body>
	<div class="container">
		<div class="top">
			<h1><a href="/"><?php bloginfo('name'); ?></a> : <a id="tagline" href="/"><?php bloginfo('description'); ?>	</a></h1>
		</div> <!-- /end .top -->
