<?php decorate_with('layout') ?>
  <div class="hero-unit" id="splash">
		<h1>
      <?php echo image_tag('/plugins/arSparcPlugin/images/sparc_connect.png', array('alt' => __('FIT Special Collections and College Archives'))) ?>
    </h1>
    <h2>The archival collections of the FIT Library's Special Collections and College Archives</h2>
    <form class="hero-search" action="<?php echo url_for(array('module' => 'informationobject', 'action' => 'browse')) ?>" data-autocomplete="<?php echo url_for(array('module' => 'search', 'action' => 'autocomplete')) ?>" autocomplete="off">
      <div class="input-append input-block-level">
        <input type="hidden" name="topLod" value="0"/>
        <input type="text" id="appendedInput" name="query" class="span12" value="<?php echo $sf_request->query ?>" placeholder="<?php echo __('Connect to the Collections') ?>"/>
        <a class="btn add-on"><i class="fa fa-search" aria-hidden="true"></i></a>
      </div>
    </form>
  </div>
  <?php echo render_value($sf_data->getRaw('contentX')) ?>
  <?php if (QubitAcl::check($resource, 'update')): ?>
    <section class="actions">
      <ul>
        <li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'), 'class' => 'c-btn')) ?></li>
      </ul>
    </section>
  <?php endif; ?>


<script type="text/javascript">

jQuery('.carousel').carousel({
  interval: 5000,
  pause: "false"
})
</script>
