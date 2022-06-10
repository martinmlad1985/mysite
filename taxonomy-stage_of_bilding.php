


<?php get_header(); ?>

<main>

    <div class="container">
        Taxonomy
        <br>

        <?php 
            while( have_posts() ){
                the_post();
                the_title();
                the_content();
            }
        ?>

    </div>

</main>

<?php get_footer(); ?>

