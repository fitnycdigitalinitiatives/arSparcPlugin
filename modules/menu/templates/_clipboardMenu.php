<li class="dropdown" id="clipboard-menu" data-alert-message="<?php echo __('Note: clipboard items unclipped in this page will be removed from the clipboard when the page is refreshed. You can re-select them now, or reload the page to remove them completely. Using the sort or print preview buttons will also cause a page reload - so anything currently deselected will be lost!') ?>">

	  <a href="/user/clipboard"><?php echo __('Clipboard') ?><?php if ($count > 0): ?> <span class="badge badge-info"><?php echo $count ?></span><?php endif; ?></a>
</li>