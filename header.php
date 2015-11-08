<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/screen.css">
    <link href='https://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic|Josefin+Slab:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="nav--main">
		<h1><a href="<?php bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
		<?php if(!is_home()): ?>
			<h2>&nbsp;> <?php the_title(); ?></h2>
		<?php endif; ?>
		<a class="fa fa-bars" href="#"></a>
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</nav>
    <div class="pure-g headline">
        <div class="pure-u-1-1">

        </div>
    </div>
	<?php get_template_part('triangles'); ?>
