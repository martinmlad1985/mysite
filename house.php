
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
                // 'numberposts' => 5,
                'orderby'     => 'date',
                'category_name' => 'about_home',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                'nopaging' => true
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>  
                    <div class= "house"> 
                        <a class="house__permalink" href="<?php the_permalink()?>">
                            <div class="house__title">
                                <?php the_title() ?>
                            </div>
                            <div class="house__contentwrap">
                                <div class="house__content">
                                    <?php the_content() ?>
                                </div>
                                <div class="house__img" style="background-image: url(<?php the_field('home-img')?>); background-size: cover; background-repeat: no-repeat;"></div>
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



                            
                        















