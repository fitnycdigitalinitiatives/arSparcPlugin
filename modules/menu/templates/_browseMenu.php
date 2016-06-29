<li class="dropdown" id="browse-menu">

  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $browseMenu->getLabel(array('cultureFallback' => true)) ?><b class="caret"></b></a>

  <ul class="dropdown-menu">
        <?php echo QubitMenu::displayHierarchyAsList($browseMenu, 0) ?>
  </ul>

</li>
