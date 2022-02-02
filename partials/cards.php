<?php
include __DIR__ . '/../server/db.php';
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
    <?php foreach ($discs as $disc) { ?>
        <div class="col py-4"> 
            <div class="col-bg">        
                <img class="img-fluid" src="<?= $disc['poster'] ?>" alt="">
                <h2 class="title" ><?= $disc['title'] ?></h2>
                <h3 class="author" ><?= $disc['author'] ?></h3>
                <h4 class="year" ><?= $disc['year'] ?></h4>
            </div>
        </div>
        <?php } ?>
</body>
</html> 