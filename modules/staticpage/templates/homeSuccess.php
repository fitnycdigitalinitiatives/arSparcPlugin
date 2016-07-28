<?php decorate_with('layout') ?>
  <?php slot('title') ?>
	<h1><?php echo render_title($resource->getTitle(array('cultureFallback' => true))) ?></h1>
  <?php end_slot() ?>

  <div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
	  <div class="item" style="background-image: url('https://fit.vrchost.com/media/get/62232/lb_sc_000018/');">
		<div class="carousel-caption">
		  <h4>First Thumbnail label</h4>
		  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>
	  </div>
	  <div class="item" style="background-image: url('https://fit.vrchost.com/media/get/78226/lb_sc_000133/');">
		<div class="carousel-caption">
		  <h4>Second Thumbnail label</h4>
		  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>
	  </div>
	  <div class="item" style="background-image: url('https://fit.vrchost.com/media/get/77757/lb_sc_000065/');">
		<div class="carousel-caption">
		  <h4>Third Thumbnail label</h4>
		  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>
	  </div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>


<?php if (QubitAcl::check($resource, 'update')): ?>

    <section class="actions">
      <ul>
        <li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'), 'class' => 'c-btn')) ?></li>
      </ul>
    </section>

<?php endif; ?>