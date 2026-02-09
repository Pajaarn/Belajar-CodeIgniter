<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $Title ?></title>
</head>
<body>
    <h1><?= $Title ?></h1>
    <ul>
        <?php foreach ($Nama as $nama): ?>
            <li><?= $nama ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>