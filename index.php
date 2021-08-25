<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
</h1>

</body>
</html>
