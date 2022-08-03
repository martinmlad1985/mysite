



<?php get_header(); ?>

<main>

    <div class="container">
        

        <?php 
            $my_posts = get_posts( array(
                'orderby'     => 'date',
                // 'category_name' => 'family',
                'suppress_filters' => true, 
                'nopaging' => true,
                'post_type'   => 'family',
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>  
                    <div class= "house"> 
                        <a class="house__permalink" href="<?php the_permalink()?>">
                            <div class="house__title">
                                <?php the_field('photo_name') ?>
                            </div>
                            <div class="house__contentwrap">
                                <div class="house__content">
                                    <?php the_field('description') ?>
                                </div>
                                <div class="house__img" style="background-image: url(<?php the_field('photo')?>); background-size: cover; background-repeat: no-repeat;"></div>
                            </div>
                             </a>    
                    </div>
                <?php
                 
            }

            wp_reset_postdata(); // сброс
        ?>
         
    </div>
</main>

<?php get_footer(); ?>
