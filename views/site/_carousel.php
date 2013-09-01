<?php if(Yii::app()->getRequest()->getRequestUri() == '/'): ?>
<div class="row-fluid">
  <div class="span12">
    <div id="product_carousel" class="carousel slide">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item"><img src="<?= Yii::app()->theme->baseUrl; ?>/components/carousel/images/football.jpg"></div>
        <div class="item"><img src="<?= Yii::app()->theme->baseUrl; ?>/components/carousel/images/hoodies.jpg"></div>
        <div class="item"><img src="<?= Yii::app()->theme->baseUrl; ?>/components/carousel/images/laundry.jpg"></div>
       	<div class="item"><img src="<?= Yii::app()->theme->baseUrl; ?>/components/carousel/images/pregame.jpg"></div>
       	<div class="item"><img src="<?= Yii::app()->theme->baseUrl; ?>/components/carousel/images/teedoff.jpg"></div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#product_carousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#product_carousel" data-slide="next">&rsaquo;</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
	$('.carousel').carousel();
});
</script>
<?php endif; ?>