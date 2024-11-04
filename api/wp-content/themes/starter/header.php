<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>
		<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
			
			wp_title( '|', true, 'right' );
		?>
  </title>
	<meta name="description" content="">
  
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

