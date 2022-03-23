<?php
get_header();
?>

<?php

// $args = array(
//     'post_author' => 1,
//     'post_status' => 'publish'
// );

// $my_query = new WP_Query($args);
?>



<article class="content px-3 py-5 p-md-5">
    <?php
    if (have_posts()) {

        while (have_posts()) {

            the_post();
            // the_content();
            get_template_part('template-parts/content', 'article');
        }
    }
    ?>
</article>

<?php
get_footer();
?>