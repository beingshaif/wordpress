<?php

/* Template Name: Gallery */
get_header();

$images = get_field('gallery');

?>

<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <!-- <?php var_dump($images); ?> -->

        <?php if ($images) : ?>
            <div class="gallery">
                <div class="row">
                    <?php foreach ($images as $image) : ?>
                        <div class="col-lg-4 mb-5">
                            <a href="<?php echo $image['sizes']['large']; ?>">
                                <img src="<?php echo $image['sizes']['square']; ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>