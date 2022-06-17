



<?php get_header(); ?>

<main>

    <div class="container">
        family

        <?php 
            // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => 5,
                'post_type'   => 'family',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>  
                    <div>  <?php
                         the_title();
                         the_content(); 
                         the_field('photo_name');
                         the_field('description');
                            ?>
                    <img src="<?php the_field('photo'); ?>" alt="csfsf" />
                    <hr>
                    </div>
                <?php
                 
            }

            wp_reset_postdata(); // сброс
        ?>
         
    </div>
</main>

<?php get_footer(); ?>
