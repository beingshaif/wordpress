<?php $contents = get_sub_field('content'); ?>
<div class="row">

    <?php foreach ($contents as $content) : ?>
        <?php if ($content['image_side'] == 'right') : ?>

            <div class="col-md-6">
                <h2><?php echo $content['title']; ?></h2>
                <p><?php echo $content['content']; ?></p>

            </div>
            <div class="col-md-6">
                <?php if ($content['image']) : ?>
                    <img class="img-fluid" src="<?php echo $content['image']['sizes']['large']; ?>" alt="">
                <?php endif; ?>
            </div>
        <?php else : ?>
            <div class="col-md-6">
                <?php if ($content['image']) : ?>
                    <img class="img-fluid" src="<?php echo $content['image']['sizes']['large']; ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <h2><?php echo $content['title']; ?></h2>
                <p><?php echo $content['content']; ?></p>
            </div>
        <?php endif; ?>

    <?php endforeach; ?>

</div>