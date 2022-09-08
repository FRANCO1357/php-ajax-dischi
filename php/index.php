<?php

include '../includes/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>PHP - Ajax Dischi</title>
</head>
<body>

    <header>
        <img src="../assets/img/spotify_logo.png" alt="">
        <div class="search">
            <input type="text">
        </div>
    </header>
    <main>
        <div class="container">
            <?php foreach($discs as $key => $disc) : ?>
                <div class="card">
                    <h3><?php echo $disc['title'] ?></h3>
                    <p><?php echo $disc['author'] ?></p>
                    <p><?php echo $disc['year'] ?></p>
                    <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
                    <p><?php echo $disc['genre'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </main>
    
</body>
</html>