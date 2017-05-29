<!doctype html>

<!--[if lte IE 8]><html class="no-js ie" <?php language_attributes(); ?>><![endif]-->
<html <?php language_attributes(); ?>>
<?php wp_head(); ?>
<head>
<meta charset="utf-8" />
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");} ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>


<body <?php body_class(); ?>>
<!--[if lte IE 8]> <div class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a style="color:#f00" href="http://browsehappy.com/"><strong>click here</strong> to upgrade your browser</a> and improve your experience.</div> <![endif]--> 
