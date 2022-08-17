
<?php get_header(); ?>

<main>

    <div class="container">
      
      <?php 
            while( have_posts() ){
                the_post();
       ?>         
                
                    <div class= "single-post"> 
                        <div class="single-post__title">
                            <?php the_field('photo_name'); ?>
                        </div>
                        <div class="single-post__contentwrap">
                            <div class="single-post__content">
                                <?php the_field('description');?>
                            </div>
                            <div class="single-post__img" style="background-image: url(<?php the_field('photo')?>); background-size: cover; background-repeat: no-repeat;">
                            </div>
                        </div>
                    </div>
        <?php        
            }
        ?>
      

    </div>
</main>

<?php get_footer(); ?>