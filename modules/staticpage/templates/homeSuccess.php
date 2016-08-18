<?php decorate_with('layout_wide') ?>
  <div id="splash">
	<div class="row">
		<div class="span6" id="logo">
			<?php echo image_tag('/plugins/arSparcPlugin/images/sparc_2.png', array('alt' => __('FIT Special Collections and College Archives'))) ?>
		</div>
	</div>
  <div id="explore-dropdown">
  	<div class="row">
  		<div class="span6">
  			<a title="Explore" data-toggle="collapse" href="#explore">Explore the Archives <i class="fa fa-caret-down" aria-hidden="true"></i></a>
  		</div>
  	</div>
  	<div id="explore" class="collapse">
  		<div class="row">
  			<div class="span6">
  				<a href="/index.php/informationobject/browse" title="Archival descriptions"><?php echo __('Archival descriptions') ?></a>
  			</div>
  		</div>
  		<div class="row">
  			<div class="span6">
  				<a href="/index.php/taxonomy/browse/id/35" title="Subjects"><?php echo __('Subjects') ?></a>
  			</div>
  		</div>
  		<div class="row">
  			<div class="span6">
  				<a href="/index.php/digitalobject/browse" title="Digital objects"><?php echo __('Digital objects') ?></a>
  			</div>
  		</div>
  	</div>
  </div>
  </div>

  <div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
	  <div class="item active" style="background-image: url('https://fit.vrchost.com/media/get/78243/lb_sc_000150/');">
		<div class="carousel-caption">
		  <div class ="container">
			  <a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>First Thumbnail label</h4>
			  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
		  </div>
		</div>
	  </div>
	  <div class="item" style="background-image: url('https://fit.vrchost.com/media/get/80062/lb_sc_000243/');">
		<div class="carousel-caption">
		  <div class ="container">
			  <a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>Second Thumbnail label</h4>
			  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
		  </div>
		</div>
	  </div>
	  <div class="item" style="background-image: url('https://fit.vrchost.com/media/get/77757/lb_sc_000065/');">
		<div class="carousel-caption">
		<div class ="container">
			  <a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>Third Thumbnail label</h4>
			  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
		</div>
		</div>
	  </div>
	</div>
</div>


<script type="text/javascript">

jQuery('.carousel').carousel({
  interval: 5000,
  pause: "false"
})
</script>
