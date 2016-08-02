<?php decorate_with('layout') ?>
  <div class="row">
	<div class="span4">
		<div class="row">
			<div class="span12">
			<h1>I'M THE LOGO</h1>
			</div>
		</div>
		<div class="row">
			<div class="span12">
			<ul>
			  <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID) ?>
			  <?php if ($browseMenu->hasChildren()): ?>
				<?php foreach ($browseMenu->getChildren() as $item): ?>
				  <li><a href="<?php echo url_for($item->getPath(array('getUrl' => true, 'resolveAlias' => true))) ?>"><?php echo esc_specialchars($item->getLabel(array('cultureFallback' => true))) ?></a></li>
				<?php endforeach; ?>
			  <?php endif; ?>
			</ul>
			</div>
		</div>
		<div class="row">
			<div class="span12">
			<?php echo get_component('default', 'popular', array('limit' => 5, 'sf_cache_key' => $sf_user->getCulture())) ?>
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
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>


<script type="text/javascript">

jQuery('.carousel').carousel({
  interval: 5000,
  pause: "false"
})
</script>
