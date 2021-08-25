<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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

</body>
</html>
