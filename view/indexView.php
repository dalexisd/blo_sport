<?php
include 'view/partials/header.php';
include 'view/partials/footer.php';

?>
<body>
<h1 class="text-center">BLOG SPORT</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="row">
      
      <ul class="navbar-nav">
        
        <div class="col-6">
        
                <li class="nav-item">
                  <a class="nav-link" href="indexView.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Compétitions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="newsView.php">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sports</a>
                </li>
        </div>

        <div class="col-6 text-right alignright">
                <li class="nav-item text-justify-right">
                  <a class="nav-link" href="#">Sign in <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item text-align-right">
                  <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
                </li>
                
        </div>
      </ul>  
    </div>
    
  </div>
  
</nav>
    <div class= "container text-center">
  <?php foreach ($articles as $article){ ?>

      <div class="card" style="width: 18rem;">
          <img src="images/miketyson.png" class="card-img-top" alt="photo_portrait_mike">
          <div class="card-body">
          <h5 class="card-title"><?php echo $article["title"]?></h5>
          <p class="card-text"><?php echo $article["content"]?></p>
          <span class="btn btn-primary"><a href="articles.php">Voir plus</a></span>
      </div>
      </div>
</div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>