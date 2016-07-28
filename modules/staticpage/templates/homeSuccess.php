<?php decorate_with('layout') ?>
  <?php slot('title') ?>
	<h1><?php echo render_title($resource->getTitle(array('cultureFallback' => true))) ?></h1>
  <?php end_slot() ?>

  <?php echo render_value($sf_data->getRaw('content')) ?>


<?php if (QubitAcl::check($resource, 'update')): ?>

    <section class="actions">
      <ul>
        <li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'), 'class' => 'c-btn')) ?></li>
      </ul>
    </section>

<?php endif; ?>