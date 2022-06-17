
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
        
            

    </div>
</main>

<?php get_footer(); ?>



                            
                        















