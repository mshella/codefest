<h2>Show <?php echo f('controller.name') ?></h2>

<form method="post" role="form">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>
        <?php if (!$field['hidden']): ?>
        <div class="form-group">
            <?php echo $field->label() ?>

            <?php echo $field->format('readonly', @$entry[$name]) ?>

        </div>
        <?php endif ?>

    <?php endforeach ?>

    <div class="command-bar">
        <a href="<?php echo f('controller.url') ?>">List</a>
        <a href="<?php echo f('controller.url', '/:id/update') ?>">Update</a>
        <a href="<?php echo f('controller.url', '/:id/delete') ?>">Delete</a>
    </div>

</form>
