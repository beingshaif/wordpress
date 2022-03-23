<?php
get_header();

$title = get_field('page_title');
$description = get_field('description');
$other_description = get_field('other_description');
$my_input = get_field('my_input');

?>


<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <?php if ($my_input) : ?>
            <?php echo $my_input; ?>
        <?php endif; ?>
        <br>
        <br>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

        <!-- <h3>
            <?php the_field('page_title'); ?>
        </h3>
        <p>
            <?php the_field('description'); ?>
        </p> -->

        <hr>
        <?php if ($title) : ?>
            <h3><?php echo $title; ?></h3>
        <?php endif; ?>
        <hr>
        <?php if ($description) : ?>
            <p><?php echo $description; ?></p>
        <?php endif; ?>
        <hr>
        <?php if ($other_description) : ?>
            <p><?php echo $other_description; ?></p>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>