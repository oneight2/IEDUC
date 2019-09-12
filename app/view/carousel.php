<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
      <?php
      $counter = 1;
      foreach ($carousel as $row) {
      ?>
      <div class="carousel-item <?php if($counter <=1){ echo " active ";} ?>">
        <div class="carousel-background"><img src="<?= BASE_URL.'img/carousel/'.$row['gambar'] ?>" alt=""></div>
      </div>
      <?php $counter++; } ?>
    </div>
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>