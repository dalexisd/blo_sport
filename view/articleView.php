<?php include 'header.php';?>


<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
        <span><?php echo $articles['title'] . " " . $articles['date'] . " " . $articles['content']?></span>
        </div>
        <div class="card-action">
          <a href="articleView.php?id=<?php echo $articles['id'];?>"></a>
        </div>
      </div>
    </div>
  </div>
            

<?php include 'footer.php';?>