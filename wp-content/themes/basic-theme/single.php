<?php get_header(); ?>


<section class="page">
    <div class="container">



        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <img src="<?php the_post_thumbnail_url('my_custom_size') ?>" class="img-fluid m-3 img-thumbnail" alt="<?php the_title(); ?>">
        <hr>

        <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>



    </div>
</section>

<?php get_footer(); ?>