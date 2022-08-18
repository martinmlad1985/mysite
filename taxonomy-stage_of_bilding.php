


<?php get_header(); ?>

<main>

    <div class="container">

        <?php 
            while( have_posts() ){
                the_post();
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
        ?>

    </div>

</main>

<?php get_footer(); ?>


               





