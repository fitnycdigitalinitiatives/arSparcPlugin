<li class="dropdown" id="changeLanguageMenu">

	  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Language') ?><b class="caret"></b></a>

	  <ul class="dropdown-menu">
	  <?php foreach (sfConfig::getAll() as $name => $value): ?>
          <?php if ('app_i18n_languages' == substr($name, 0, 18)): ?>
            <li<?php if ($sf_user->getCulture() == $value): ?> class="active"<?php endif; ?>><?php echo link_to(format_language($value, $value), array('sf_culture' => $value) + $sf_data->getRaw('sf_request')->getParameterHolder()->getAll()) ?></li>
          <?php endif; ?>
        <?php endforeach; ?>
	  </ul>
</li>