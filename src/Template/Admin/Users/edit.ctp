<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?= __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # %s?', $user->id)]) ?></li>
			<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
	<?= $this->Form->create($user) ?>
		<fieldset>
			<legend><?= __('Edit User'); ?></legend>
		<?=
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('photo');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
	</div>
</div>