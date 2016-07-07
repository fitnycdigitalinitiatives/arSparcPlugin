<?php foreach (array($adminMenu, $importMenu, $manageMenu, $addMenu) as $menu): ?>

  <?php if (($menu->getName() == 'add' || $menu->getName() == 'manage') || $sf_user->isAdministrator()): ?>
  
    <li class="dropdown-submenu">
		<a tabindex="-1" href="#"><?php echo $menu->getLabel(array('cultureFallback' => true)) ?></a>
		<ul class="dropdown-menu">
		  <?php echo QubitMenu::displayHierarchyAsList($menu, 0, array('overrideVisibility' => array('admin' => $sf_user->isAdministrator()))) ?>
		</ul>
	</li>

  <?php endif; ?>

<?php endforeach; ?>