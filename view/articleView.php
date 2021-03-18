<?php
include 'partials/header.php';
include 'navView.php';
?>
<?php foreach ($articles as $article){ ?>

<div class="bg-iamges"> 
        <div class="text-center">
            <?php echo $article["title"]?>
        </div>
        <div class="text-center mt-5">
        <?php echo $article["date"]?>
        </div>
        <div class="text-center mt-5">
        <?php echo $article["content"]?>
        </div>
</div>
<?php } ?>