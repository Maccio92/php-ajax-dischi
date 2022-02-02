<?php
include __DIR__ . '/../server/db.php';
?>
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
