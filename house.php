
<?php
/*
Template Name: Шаблон страницы "Про дом"
*/
?>


<?php get_header(); ?>

<main>

    <div class="container">
        <?php 
            // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => 5,
                'orderby'     => 'date',
                'category_name' => 'about_home',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>  
                    <div class= "house"> 
                        <a href="<?php the_permalink()?>">
                            <?php the_title() ?>;
                           </a>    
                         <hr>
                    </div>
                <?php
                 
            }

            wp_reset_postdata(); // сброс
        ?>
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



                            
                        















