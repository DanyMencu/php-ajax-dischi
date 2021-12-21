<?php
//Import database
require_once __DIR__ . '/scripts/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="./img/logo.png" alt="Spotify logo">
            </div>
        </div>
    </header>

    <main>
        <div class="container disc-section flex-between">
            <?php foreach ($database as $album) : ?>
                <div class="album-card">
                    <div class="poster">
                        <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?> poster">
                    </div>
                    <h3><?php echo $album['title'] ?></h3>
                    <span class="author"><?php echo $album['author'] ?></span>
                    <span class="year"><?php echo $album['year'] ?></span>
                    <span class="genre"><?php echo $album['genre'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>