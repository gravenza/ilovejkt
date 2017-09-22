<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>I LOVE JAKARTA</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slicknav.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/masonry.pkgd.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/imagesloaded.pkgd.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		//$('.slider').bxSlider({
//			auto:true,
//			controls:false,
//			pager:false,
//			mode:'fade'
//			});
		
		$('.menu').slicknav();

		var $grid = $('.grid').masonry({
			//columnWidth: 200,
			itemSelector: '.grid-item'
		});
		
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
		});
	
	});
</script>
</head>

<body>

<header class="l">
	<section class="border"></section>
	<section class="ontop">
	<div class="container">
	<div class="clearer" style="margin:0">
	<div class="row">
		<div class="col-md-4 col-xs-12">
		<div class="entry-account">
		<a href="#"><i class="fa fa-user-plus"></i> Register</a>
		<a href="#"><i class="fa fa-sign-in"></i> Login</a>
		</div>
		</div>
		
		<div class="col-md-4 col-md-offset-4 col-xs-12">
		<div class="socmed">
		<a href=""><i class="fa fa-search"></i></a>
		<a href=""><i class="fa fa-facebook"></i></a>
		<a href=""><i class="fa fa-twitter"></i></a>
		<a href=""><i class="fa fa-instagram"></i></a>
		</div>
		</div>
		
	</div>
	</div>
	</div>
	</section>
	<div class="container">
    
    <div class="clearer">
	<div class="row">
	
	<div class="col-md-4 col-xs-12">
		<div class="logo">
    	<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>images/logo.png"/></a>
		</div>
    </div>
	
	<div class="col-md-8 hidden-xs">
		<ul class="menu">
		<li><a class="<?php echo activate_menu('home') ?>" href="<?php echo site_url(); ?>">Home</a></li>
        <li><a class="<?php echo activate_menu('about') ?>" href="<?php echo site_url('about'); ?>">About Us</a></li>
        <li><a class="<?php echo activate_menu('articles') ?>" href="<?php echo site_url('articles'); ?>">Articles</a></li>
        <li><a class="<?php echo activate_menu('tourism') ?>" href="<?php echo site_url('tourism'); ?>">Tourism</a></li>
		<li><a class="<?php echo activate_menu('events') ?>" href="<?php echo site_url('events'); ?>">Events</a></li>
		<li><a class="<?php echo activate_menu('news') ?>" href="<?php echo site_url('news'); ?>">News</a></li>
		<li><a class="<?php echo activate_menu('gallery') ?>" href="<?php echo site_url('gallery'); ?>">Gallery</a></li>
        <li><a class="<?php echo activate_menu('contact') ?>" href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
        </ul>
	
	</div>
    
    </div>
	</div>
    
	</div>
</header>