

<?php get_header(); ?>

<main>

    <div class="container">
      
      <?php 
            while( have_posts() ){
                the_post();
                get_template_part( 'template/post', get_post_format()); 
            }
        ?>
      

    </div>
</main>

<?php get_footer(); ?>




