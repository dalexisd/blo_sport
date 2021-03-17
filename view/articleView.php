<?php 
include 'partials/header.php';

?>


<div class= "container text-center">
  <?php foreach ($articles as $article){ ?>

      <div class="card" style="width: 18rem;">
          <img src="images/miketyson.png" class="card-img-top" alt="photo_portrait_mike">
          <div class="card-body">
          <h5 class="card-title"><?php echo $article["title"]?></h5>
          <p class="card-text"><?php echo $article["content"]?></p>
          <span class="btn btn-primary"><a href="articleView.php">Voir plus</a></span>
      </div>
      </div>
      <?php } ?>
            

<?php include 'partials/footer.php';?>