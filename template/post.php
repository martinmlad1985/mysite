

<div class= "single-post"> 
        <div class="single-post__title">
            <?php the_title() ?>
        </div>
        <div class="single-post__contentwrap">
            <div class="single-post__content">
                <?php the_content() ?>
            </div>
            <div class="single-post__img" style="background-image: url(<?php the_field('home-img')?>); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>
        <div class= "single-post__taxonomy">
            <?php the_terms( get_the_ID(), 'stage_of_bilding', ' ' , '/', ' ' ); ?>
        </div>
</div>

