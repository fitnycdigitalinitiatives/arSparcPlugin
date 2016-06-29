<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === ''): ?>
  <div id="update-check">
    <?php echo link_to('Please configure your site base URL', 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
  </div>
<?php endif; ?>

<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
		<?php if (sfConfig::get('app_toggleLogo')): ?>
		<?php echo link_to(image_tag('/plugins/arSparcPlugin/images/sparc.png', array('alt' => __('FIT Special Collections and College Archives'))), '@homepage', array('class' => 'brand', 'rel' => 'home')) ?>
		<?php endif; ?>		
		<ul class="nav">
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  Browse
			  <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Archival descriptions</a></li>
				<li><a href="#">Authority records</a></li>
				<li><a href="#">Archival institutions</a></li>
				<li><a href="#">Functions</a></li>
				<li><a href="#">Subjects</a></li>
				<li><a href="#">Places</a></li>
				<li><a href="#">Digital objects</a></li>
			</ul>
			
			<form class="navbar-search pull-left">
			  <input type="text" class="search-query" placeholder="Search">
			</form>
		  </li>
		</ul>
	</div>
</div>

<header id="top-bar">
	<div class="container">
	  <?php if (sfConfig::get('app_toggleLogo')): ?>
		<?php echo link_to(image_tag('/plugins/arSparcPlugin/images/sparc.png', array('alt' => __('FIT Special Collections and College Archives'))), '@homepage', array('id' => 'logo', 'rel' => 'home')) ?>
	  <?php endif; ?>

	  <?php if (sfConfig::get('app_toggleTitle')): ?>
		<h1 id="site-name">
		  <?php echo link_to('<span>'.esc_specialchars(sfConfig::get('app_siteTitle')).'</span>', '@homepage', array('rel' => 'home', 'title' => __('Home'))) ?>
		</h1>
	  <?php endif; ?>

	  <nav>

		<?php echo get_component('menu', 'userMenu') ?>

		<?php echo get_component('menu', 'quickLinksMenu') ?>

		<?php echo get_component('menu', 'changeLanguageMenu') ?>

		<?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>

	  </nav>

	  <div id="search-bar">

		<?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>

		<?php echo get_component('search', 'box') ?>

	  </div>

	  </section>

	  <?php echo get_component_slot('header') ?>
	</div>
</header>

<?php if (sfConfig::get('app_toggleDescription')): ?>
  <div id="site-slogan">
    <div class="container">
      <div class="row">
        <div class="span12">
          <span><?php echo esc_specialchars(sfConfig::get('app_siteDescription')) ?></span>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>