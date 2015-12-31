<?php

get_header();

the_post();
echo apply_filters("the_content", get_the_content());



?>

Second



<?php get_footer(); ?>
