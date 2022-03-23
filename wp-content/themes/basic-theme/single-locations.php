<?php get_header();

$link = get_field('link');
$page_links = get_field('page_link');

?>

<section class="page">
    <div class="container">

        <!-- <?php
                echo '<pre>';
                print_r($page_links);
                echo '</pre>';
                ?> -->

        <?php if ($page_links) : ?>
            <ul>
                <?php foreach ($page_links as $page_link) : ?>
                    <li>

                        <a href="<?php echo $page_link ?>" target="_blank"><?php echo $page_link ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>
        <br>
        <br>
        <?php if ($link) : ?>
            <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
        <?php endif; ?>

        <?php

        $args = [
            'post_type' => 'teammembers',
            'meta_query' => [
                'key' => 'locations',
                'value' => '""' . get_the_ID() . '""',
                'compare' => 'LIKE',
            ]
        ];

        $team_members = get_posts($args);

        // echo '<pre>';
        // print_r($team_members);
        // echo '</pre>';
        ?>

        <?php foreach ($team_members as $member) : ?>
            <a href="<?php echo get_permalink($member->ID); ?>">
                <h1><?php echo $member->post_title; ?></h1>
            </a>
            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($member->ID, 'large'); ?>" alt="">
            <!-- <pre>
                <?php echo print_r($member); ?>
            </pre> -->
        <?php endforeach; ?>

        <!-- <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <img src="<?php the_post_thumbnail_url('my_custom_size') ?>" class="img-fluid m-3 img-thumbnail" alt="<?php the_title(); ?>">
                <hr>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?> -->



    </div>
</section>

<?php get_footer(); ?>