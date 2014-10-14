<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?php __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
			<li><?php $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
	<?php $this->Form->create($category) ?>
		<fieldset>
			<legend><?php __('Add Category'); ?></legend>
		<?php
			echo $this->Form->input('title');
		?>
		</fieldset>
	<?php $this->Form->button(__('Submit')) ?>
	<?php $this->Form->end() ?>
	</div>
</div>