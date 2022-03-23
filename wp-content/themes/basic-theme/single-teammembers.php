<?php get_header();

$locations = get_field('locations');

?>


<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <hr>

        <?php foreach ($locations as $location) : ?>

            <h3>
                <a href="<?php echo get_page_link($location->ID)  ?>">
                    <?php echo $location->post_title ?>
                </a>
            </h3>
            <hr>
            <img src="<?php echo get_the_post_thumbnail_url($location->ID, 'my_custom_size') ?>" class="img-fluid m-3 img-thumbnail" alt="<?php the_title(); ?>">
            <hr>

            <p><?php echo $location->post_content ?></p>
        <?php endforeach; ?>

    </div>
</section>

<?php get_footer(); ?>