
<?php get_header(); ?>

<main>
    <div class="container py-5">    
        Contacts
        <?php  echo do_shortcode( '[contact-form-7 id="60" title="форма"]' );?>
        <?php wp_nav_menu( [
					'theme_location'  => 'main',
					'container'       => '',
					'menu_class'      => 'hide menu',
                    'menu_id'         => 'popup_menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s p-0 m-0" >%3$s</ul>'
				] ); ?>
    </div>
</main>

<?php get_footer(); ?>
