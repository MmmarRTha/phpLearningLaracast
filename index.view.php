<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Learning Lessons</title>
</head>
<body>
<h1>
    <?= $greeting ?>
</h1>

<ul>
    <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach  ($person as $key => $feature) : ?>
        <li> <strong><?= $key; ?></strong> <?= $feature; ?> </li>
    <?php endforeach; ?>
</ul>

<h2>Task For The Day</h2>

<ul>
    <?php foreach ($task as $heading => $value): ?>
        <li>
            <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
        </li>
    <?php endforeach; ?>
</ul>

<ul>
    <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>
    <li>
        <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
            <span>&#9989;</span>
        <?php else : ?>
            <span>Incomplete</span>
        <?php endif; ?>
    </li>
</ul>

</body>
</html>
