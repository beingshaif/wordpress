<?php
get_header();

?>


<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <?php if (have_rows('content')) : ?>

            <?php while (have_rows('content')) : the_row(); ?>

                <!-- First Section -->
                <?php if (get_row_layout() == 'column_section') : ?>

                    <?php get_template_part('template-parts/template', 'columns') ?>

                <?php endif; ?>
                
                <!-- Second Section -->
                <?php if (get_row_layout() == 'textarea_with_image') : ?>

                    <?php get_template_part('template-parts/template', 'textarea-with-image') ?>
 
                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>