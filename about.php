
<?php
/*
Template Name: Шаблон страницы "Обо мне"
*/
?>


<?php get_header(); ?>

<main>

    <div class="container">
    <?php 
            $my_posts = get_posts( array(
                'orderby'     => 'date',
                'category_name' => 'about',
                'suppress_filters' => true, 
                'nopaging' => true
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>  
                    <div class= "about col col-md-8"> 
                        <?php the_content(); ?> 
                    </div>
                <?php
                 
            }

            wp_reset_postdata(); // сброс
        ?>    
       
    </div>
</main>

<?php get_footer(); ?>
