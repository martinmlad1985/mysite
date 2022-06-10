
<?php

the_title();
the_content();
the_post_thumbnail(array(), array('class' => 'blablabla'));
the_terms( get_the_ID(), 'stage_of_bilding', ' ' , '/', ' ' );

?>