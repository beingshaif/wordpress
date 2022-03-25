<?php $columns = get_sub_field('columns'); ?>
<div class="row">

    <?php foreach ($columns as $column) : ?>
        <div class="col-md-4">
            <h2><?php echo $column['title']; ?></h2>
            <p><?php echo $column['content']; ?></p>
            <?php if ($column['link']) : ?>
                <a href="<?php echo $column['link']['url']; ?>" target="<?php echo $column['link']['target']; ?>"><?php echo $column['link']['title']; ?></a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

</div>