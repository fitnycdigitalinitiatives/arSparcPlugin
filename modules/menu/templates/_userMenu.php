<?php if (!$sf_user->isAuthenticated()): ?>
  <li class="dropdown">

	  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Log in') ?><b class="caret"></b></a>

	  <ul class="dropdown-menu">
			<li>
				<h2><?php echo __('Have an account?') ?></h2>
			</li>
			<li class="divider"></li>
			<li>
				 <?php echo $form->renderFormTag(url_for(array('module' => 'user', 'action' => 'login'))) ?>

				  <?php echo $form->renderHiddenFields() ?>

				  <?php echo $form->email->renderRow() ?>

				  <?php echo $form->password->renderRow(array('autocomplete' => 'off')) ?>

				  <button type="submit"><?php echo __('Log in') ?></button>
				</form>
			</li>
	  </ul>

  </li>

<?php else: ?>
  <li class="dropdown">

	  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sf_user->user->username ?><b class="caret"></b></a>

	  <ul class="dropdown-menu">
		<li>
			<?php echo image_tag($gravatar, array('alt' => '')) ?>&nbsp;
			<h2><?php echo __('Hi, %1%', array('%1%' => $sf_user->user->username)) ?></h2>
		</li>
		<li class="divider"></li>
		<li><?php echo link_to(__('Profile'), array($sf_user->user, 'module' => 'user')) ?></li>
        <li><?php echo link_to(__('Log out'), array('module' => 'user', 'action' => 'logout')) ?></li>
	  </ul>
  </li>

<?php endif; ?>