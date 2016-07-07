<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === ''): ?>
  <div id="update-check">
    <?php echo link_to('Please configure your site base URL', 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
  </div>
<?php endif; ?>

<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
	  <div class="container">
	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
		<?php if (sfConfig::get('app_toggleLogo')): ?>
		<?php echo link_to(image_tag('/plugins/arSparcPlugin/images/sparc.png', array('alt' => __('FIT Special Collections and College Archives'))), '@homepage', array('class' => 'brand', 'rel' => 'home')) ?>
		<?php endif; ?>	
			<div class="nav-collapse collapse">
			<ul class="nav">
			  <?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
			  <?php echo get_component('menu', 'userMenu') ?>
			  <?php echo get_component('menu', 'changeLanguageMenu') ?>
			  <?php if ('fr' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('À propos'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php elseif ('es' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('Acera'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php elseif ('nl' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('Over'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>	
			  <?php else: ?>
			  <li><?php echo link_to(__('About'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php endif; ?>
			</ul>
			<form class="navbar-search pull-left">
				<input type="text" class="search-query" placeholder="Search">
			</form>
			</div>
	  </div>
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