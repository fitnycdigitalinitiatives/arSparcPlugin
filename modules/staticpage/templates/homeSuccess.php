<?php decorate_with('layout') ?>
  <div class="hero-unit" id="splash">
		<h1>
      <?php echo image_tag('/plugins/arSparcPlugin/images/sparc_connect.png', array('alt' => __('FIT Special Collections and College Archives'))) ?>
    </h1>
    <h2>The archival collections of the FIT Library's Special Collections and College Archives</h2>
    <form class="hero-search" action="<?php echo url_for(array('module' => 'informationobject', 'action' => 'browse')) ?>" data-autocomplete="<?php echo url_for(array('module' => 'search', 'action' => 'autocomplete')) ?>" autocomplete="off">
      <div class="input-append input-block-level">
        <input type="hidden" name="topLod" value="0"/>
        <input type="text" id="appendedInput" name="query" class="span12" value="<?php echo $sf_request->query ?>" placeholder="<?php echo __('Connect to the Collections') ?>"/>
        <a class="btn add-on"><i class="fa fa-search" aria-hidden="true"></i></a>
      </div>
    </form>
  </div>

  <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class=""></li>
    	<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/plugins/arSparcPlugin/images/carnegie_homepage.jpg');">
      	<div class="carousel-caption">
      		<div class ="container">
      			<a href="/hattie-carnegie-sketches-1940-5"><h4>Hattie Carnegie Sketches, 1940-1955</h4>
      			<p>Sketch of black day suit with flaired jacket and fitted skirt, c. 1951</p></a>
      		</div>
      	</div>
    	</div>
      <div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/plugins/arSparcPlugin/images/dejuan_homepage.jpg');">
      	<div class="carousel-caption">
      		<div class ="container">
      			<a href="/eric-de-juan-sketch-collection-1927-1990"><h4>Eric de Juan sketch collection, 1927-1989</h4>
      			<p>Original sketch by Eric de Juan for Josephine Baker's stage costumes, 1949</p></a>
      		</div>
      	</div>
    	</div>
      <div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/plugins/arSparcPlugin/images/daren_homepage.jpg');">
      	<div class="carousel-caption">
      		<div class ="container">
      			<h4>Mr. Daren sketch collection 1940-1949</h4>
      			<p>Fashion sketches of three women in day suits black, white and green day suits, 1943</p>
      		</div>
      	</div>
    	</div>
      <div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/plugins/arSparcPlugin/images/lucile_homepage.jpg');">
      	<div class="carousel-caption">
      		<div class ="container">
      			<a href="/lucile-ltd-records-1910-1927"><h4>Lucile, Ltd., records, 1910-1927</h4>
      			<p>Original sketch of ladies black satin evening gown with bustle treatment, c. 1927</p></a>
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
