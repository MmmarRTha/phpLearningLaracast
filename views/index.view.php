<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Learning Lessons</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="../views/about.view.php">About Us</a></li>
        <li><a href="../views/contact.view.php">Contact Us</a></li>
    </ul>
</nav>

<h1>My Tasks</h1>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>

</body>
</html>
