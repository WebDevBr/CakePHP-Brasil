<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?php __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php $this->Html->link(__('List Blogs'), ['action' => 'index']) ?></li>
			<li><?php $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
			<li><?php $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
			<li><?php $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
			<li><?php $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
	<?php $this->Form->create($blog) ?>
		<fieldset>
			<legend><?php __('Add Blog'); ?></legend>
		<?php
			echo $this->Form->input('title');
			echo $this->Form->input('content');
			echo $this->Form->input('user_id', ['options' => $users]);
			echo $this->Form->input('tag_id', ['options' => $tags]);
			echo $this->Form->input('category_id', ['options' => $categories]);
		?>
		</fieldset>
	<?php $this->Form->button(__('Submit')) ?>
	<?php $this->Form->end() ?>
	</div>
</div>