<li class="dropdown" id="clipboard-menu" data-toggle="tooltip" data-title="<?php echo __('Clipboard') ?>" data-clipboard-status-url="<?php echo url_for(array('module' => 'user', 'action' => 'clipboardStatus')) ?>" data-alert-message="<?php echo __('Note: clipboard items unclipped in this page will be removed from the clipboard when the page is refreshed. You can re-select them now, or reload the page to remove them completely. Using the sort or print preview buttons will also cause a page reload - so anything currently deselected will be lost!') ?>">

	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Clipboard') ?><?php if ($count > 0): ?> <span class="badge"><?php echo $count ?></span><?php endif; ?></a>

	<ul class="dropdown-menu">
    <?php echo QubitMenu::displayHierarchyAsList($menu, 0, array('overrideVisibility' => array('admin' => $sf_user->isAdministrator()))) ?>
  </ul>

</li>
