<?php get_header();

/* Template Name: Options */

$colors = get_field('choose_color');
$flavours = get_field('choose_a_flavour');
$gender = get_field('gender');
$place = get_field('where_do_you_want_to_go');
$question = get_field('are_you_learning');

?>

<section class="page">
    <div class="container">



        <h1><?php the_title(); ?></h1>

        <?php if ($colors) : ?>
            <?php echo implode(', ', $colors); ?>
        <?php endif; ?>
        <hr>
        <?php echo implode(', ', $flavours); ?>
        <hr>
        <?php echo $gender; ?>
        <hr>
        <?php echo $place; ?>
        <hr>
        <?php if($question){
            echo"You are Learning"; 
        }
        else {
            echo"You are wasting Time"; 
        }
        ?>
        <?php echo $question; ?>
    </div>
</section>

<?php get_footer(); ?>