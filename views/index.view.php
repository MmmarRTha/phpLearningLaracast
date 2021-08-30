<?php require('partials/header.php'); ?>

<h1>My Tasks</h1>

<?php foreach ($task as $tas) : ?>
    <li>
        <?php if ($tas->completed) : ?>
            <strike><?= $tas->description; ?></strike>
        <?php else : ?>
            <?= $tas->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>