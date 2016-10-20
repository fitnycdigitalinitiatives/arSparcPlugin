<div id="search-form-wrapper" role="search">

  <h2><?php echo __('Search') ?></h2>

  <form action="<?php echo url_for(array('module' => 'informationobject', 'action' => 'browse')) ?>" data-autocomplete="<?php echo url_for(array('module' => 'search', 'action' => 'autocomplete')) ?>" autocomplete="off">

    <input type="hidden" name="topLod" value="0"/>


    <input type="text" name="query"<?php if (isset($sf_request->query)) echo ' class="focused"' ?> value="<?php echo $sf_request->query ?>" placeholder="<?php echo __('Search') ?>"/>

    <button><i class="fa fa-search" aria-hidden="true"></i></button>

  </form>

</div>
