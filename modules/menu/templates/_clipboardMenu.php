<li class="dropdown" id="clipboard-menu" data-alert-message="<?php echo __('Note: clipboard items unclipped in this page will be removed from the clipboard when the page is refreshed. You can re-select them now, or reload the page to remove them completely. Using the sort or print preview buttons will also cause a page reload - so anything currently deselected will be lost!') ?>">

	  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Clipboard') ?><b class="caret"></b><?php if ($count > 0): ?> <span class="badge badge-info"><?php echo $count ?></span><?php endif; ?></a>

	  <ul class="dropdown-menu">
			<li data-plural-label="<?php echo __('descriptions selected') ?>" data-single-label="<?php echo __('description selected') ?>">
			<?php if ($count != 1): ?>
			  <?php echo $count . ' ' . __('descriptions selected') ?>
			<?php else: ?>
			  <?php echo $count . ' ' . __('description selected') ?>
			<?php endif; ?>
			</li>
			<li class="divider"></li>
			<?php echo QubitMenu::getByName('goToClipboard') ?>
	  </ul>
</li>