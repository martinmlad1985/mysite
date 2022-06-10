

<!DOCTYPE html>

<html>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>

	</head>

	<body style="background-image: url(<?php the_field('bg')?>); background-size: cover; background-repeat: no-repeat;">
       
		<div class="wrapper">   
			<header class= "d-flex justify-content-between align-items-center ">
				<div class="logo"><?php the_custom_logo() ?></div>s
				<?php wp_nav_menu( [
					'theme_location'  => 'main',
					'container'       => '',
					'menu_class'      => 'menu d-flex ',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s p-0 m-0" >%3$s</ul>'
				] ); ?>
			</header>   
		
		
		
