<!-- Start Wrap -->
<div id="wrap">

<?php echo get_component('default', 'updateCheck') ?>

<?php echo get_component('default', 'privacyMessage') ?>

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
		<?php echo link_to(image_tag('/plugins/arSparcPlugin/images/sparc_connect.png', array('alt' => __('FIT Special Collections and College Archives'))), '@homepage', array('class' => 'brand', 'rel' => 'home')) ?>
		<?php endif; ?>
			<div class="nav-collapse collapse">
			<ul class="nav">
			  <li class="divider-vertical"></li>
			  <?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
			  <?php echo get_component('menu', 'userMenu') ?>
			  <?php echo get_component('menu', 'changeLanguageMenu') ?>
			  <?php if ('fr' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('À propos'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php elseif ('es' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('Acera'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php elseif ('nl' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('Over'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php elseif ('pt' == $sf_user->getCulture()): ?>
				<li><?php echo link_to(__('Sobre'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php else: ?>
			  <li><?php echo link_to(__('About'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
			  <?php endif; ?>
        <?php echo get_component('menu', 'clipboardMenu') ?>
			</ul>
      <div id="search-bar">
			     <?php echo get_component('search', 'box') ?>
      </div>
			</div>
	  </div>
	</div>
</div>
