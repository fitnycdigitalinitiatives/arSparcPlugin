<div id="clipboard-menu" data-toggle="tooltip" data-title="<?php echo __('Clipboard') ?>" data-alert-message="<?php echo __('Note: clipboard items unclipped in this page will be removed from the clipboard when the page is refreshed. You can re-select them now, or reload the page to remove them completely. Using the sort or print preview buttons will also cause a page reload - so anything currently deselected will be lost!') ?>">

  <button class="top-item" data-toggle="dropdown" data-target="#" aria-expanded="false">
    <?php echo __('Clipboard') ?>
    <?php if ($count > 0): ?>
      <span><?php echo $count ?></span>
    <?php endif; ?>
  </button>

  <div class="top-dropdown-container">

    <div class="top-dropdown-arrow">
      <div class="arrow"></div>
    </div>

    <div class="top-dropdown-header">
      <h2><?php echo __('Clipboard') ?></h2>

      <span data-plural-label="<?php echo __('descriptions selected') ?>" data-single-label="<?php echo __('description selected') ?>">
        <?php if ($count != 1): ?>
          <?php echo $count . ' ' . __('descriptions selected') ?>
        <?php else: ?>
          <?php echo $count . ' ' . __('description selected') ?>
        <?php endif; ?>
      </span>
    </div>

    <div class="top-dropdown-body">
      <ul>
        <?php echo QubitMenu::displayHierarchyAsList($menu, 0, array('overrideVisibility' => array('admin' => $sf_user->isAdministrator()))) ?>
      </ul>
    </div>

    <div class="top-dropdown-bottom"></div>

  </div>

</div>