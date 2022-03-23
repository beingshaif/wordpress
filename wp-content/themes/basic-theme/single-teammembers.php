<?php get_header();

$locations = get_field('locations');

$related_posts = get_field('related_posts');

?>


<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <hr>

        <?php foreach ($locations as $post) : ?>

            <?php setup_postdata($post); ?>
            <h3><?php echo the_title(); ?></h3>
            <p><?php the_field('address'); ?></p>

            <!-- <h3>
                <a href="<?php echo get_page_link($location->ID)  ?>">
                    <?php echo $location->post_title ?>
                </a>
            </h3>
            <hr>
            <img src="<?php echo get_the_post_thumbnail_url($location->ID, 'my_custom_size') ?>" class="img-fluid m-3 img-thumbnail" alt="<?php the_title(); ?>">
            <hr>

            <p><?php echo $location->post_content ?></p> -->

        <?php wp_reset_postdata();
        endforeach; ?>

        <!-- <?php echo the_title(); ?> -->

        <hr>
        
        <?php
        //  echo '<pre>';
        // print_r($related_posts);
        // echo '</pre>'; 
        ?>
        <?php if ($related_posts) : ?>



            <?php foreach ($related_posts as $related_post) : ?>

                <a href="<?php echo get_the_permalink($related_post->ID) ?>">
                    <h3> <?php echo $related_post->post_title; ?></h3>
                </a>
                <p>
                    <?php echo $related_post->post_content ?>
                </p>
                <hr>
            <?php endforeach; ?>

        <?php endif; ?>


    </div>
</section>

<?php get_footer(); ?>