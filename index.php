<?php
    include_once __DIR__ . '/models/movies.php';
    include_once __DIR__ . '/models/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Boolean Movies</h1>
    </header>
    
    <main>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                    <li>
                        <?php $movie->pushDetails(); ?>
                    </li>

                <?php } ?>
        </ul>
    </main>
</body>
</html>