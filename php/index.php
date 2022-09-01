<?php

include '../api/disc/index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Ajax Dischi</title>
</head>
<body>

    <h1>Dischi</h1>
    <?php foreach($discs as $key => $disc) : ?>
        <h3><?php echo $disc['title'] ?></h3>
        <p><?php echo $disc['author'] ?></p>
        <p><?php echo $disc['year'] ?></p>
        <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
        <p><?php echo $disc['genre'] ?></p>
    <?php endforeach ?>
    
</body>
</html>