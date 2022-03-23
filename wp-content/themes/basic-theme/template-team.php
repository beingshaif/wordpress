<?php get_header();

/* Template Name: Team */

?>

<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_rows('team')) : ?>

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Biography</th>
                        <th>Profile Picture</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while (have_rows('team')) : the_row();
                        // echo '<pre>';
                        // print_r(get_sub_field('profile_picture'));
                        // echo '</pre>';

                        // echo '<pre>';
                        // print_r(get_sub_field('link'));
                        // echo '</pre>';
                        $name = get_sub_field('name');
                        $biography = get_sub_field('biography');
                        $image = get_sub_field('profile_picture');
                        $link = get_sub_field('link');
                        // $picture = $image['sizes']['thumbnail'];
                    ?>
                        <tr>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $biography; ?></td>
                            <?php if($image): ?>
                            <td><img class="img-fluid" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></td>
                            <?php endif; ?>
                            <?php if($link): ?>
                            <td><a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>