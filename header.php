<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<?php wp_head() ?>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Abstract</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- script
   ================================================== -->
	<!-- <script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script> -->

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top" <?php $class = is_admin_bar_showing() ? 'position-relative' : ''; body_class( $class ); ?>>

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>
		<?php 
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'container'       => 'nav',
			'container_class' => '',
			'container_id'    => 'main-nav-wrap',
			'menu_class'      => 'main-navigation sf-menu',
			'walker'		  => new Abstract_Walker_Nav_Menu
		));
		?>
			<?php get_search_form(); ?>
						<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->