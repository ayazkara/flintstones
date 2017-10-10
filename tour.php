<?php
  include("header.php");
?>

<!-- ! header page-->
<div class="content-body">
<div class="container page">
  <h2 class="title-section mb-5"><span><?php echo $dil["turlar"];?></span> </h2>
  <div class="row">
    <!-- Recomended item-->
    <div class="col-md-6">
      <div class="recom-item border">
        <div class="recom-media"><a href="tour_detail.php">
            <div class="pic"><img src="pic/recomended/kapadokya.jpg"  alt></div></a>
          <div class="location"></div>
        </div>
        <!-- Recomended Content-->
        <div class="recom-item-body"><a href="tour_detail.php">
            <h6 class="blog-title"><?php echo $dil["kapadokya"]." ".$dil["turlar"];?></h6></a>
          <div class="stars stars-5"></div>
          <div class="recom-price"><span class="font-4">$90</span></div>
          <a href="tour_detail.php" class="cws-button small alt"><?php echo $dil["detay"];?></a>
        </div>
        <!-- Recomended Image-->
      </div>
    </div>
    <!-- ! Recomended item-->

    <!-- Recomended item-->
    <div class="col-md-6">
      <div class="recom-item border">
        <div class="recom-media"><a href="#">
            <div class="pic"><img src="pic/recomended/balon.jpg"  alt></div></a>
          <div class="location"></div>
        </div>
        <!-- Recomended Content-->
        <div class="recom-item-body"><a href="#">
            <h6 class="blog-title"><?php echo $dil["balon"]." ".$dil["turlar"];?></h6></a>
          <div class="stars stars-5"></div>
          <div class="recom-price"><span class="font-4">$90</span></div>
          <a href="#" class="cws-button small alt"><?php echo $dil["detay"];?></a>
        </div>
        <!-- Recomended Image-->
      </div>
    </div>
    <!-- ! Recomended item-->

    <!-- Recomended item-->
    <div class="col-md-6">
      <div class="recom-item border">
        <div class="recom-media"><a href="#">
            <div class="pic"><img src="pic/recomended/atv.jpg"  alt></div></a>
          <div class="location"></div>
        </div>
        <!-- Recomended Content-->
        <div class="recom-item-body"><a href="#">
            <h6 class="blog-title"><?php echo "Atv"." ".$dil["turlar"];?></h6></a>
          <div class="stars stars-5"></div>
          <div class="recom-price"><span class="font-4">$90</span></div>
          <a href="#" class="cws-button small alt"><?php echo $dil["detay"];?></a>
        </div>
        <!-- Recomended Image-->
      </div>
    </div>
    <!-- ! Recomended item-->


  </div>
</div>
</div>
<?php
  include("footer.php");
?>
