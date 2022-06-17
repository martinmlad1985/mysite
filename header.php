

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
				<div class="logo"><?php the_custom_logo() ?></div>
					<?php wp_nav_menu( [
						'theme_location'  => 'main',
						'container'       => '',
						'menu_class'      => 'menu d-none d-md-flex',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s p-0 m-0" >%3$s</ul>'
					] ); ?>
				<div class="menu-icon d-md-none text-white">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>
				</div>
			</header>   
		
		
		
