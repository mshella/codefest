<h2>Update <?php echo f('controller.name') ?></h2>

<form method="post" role="form">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>

    <?php if ($field['hidden']) continue ?>

    <div class="form-group">

        <?php echo $field->label() ?>

        <?php echo $field->format('input', @$entry[$name]) ?>

    </div>

    <?php endforeach ?>

    <div class="command-bar">
        <input type="submit">
        <a href="<?php echo f('controller.url') ?>">List</a>
    </div>

</form>