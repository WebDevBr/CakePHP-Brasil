<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $like->id], ['confirm' => __('Are you sure you want to delete # %s?', $like->id)]) ?></li>
		<li><?= $this->Html->link(__('List Likes'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="likes form large-10 medium-9 columns">
<?= $this->Form->create($like) ?>
	<fieldset>
		<legend><?= __('Edit Like') ?></legend>
	<?=
		echo $this->Form->input('blog_id', ['options' => $blogs]);
		echo $this->Form->input('user_id', ['options' => $users]);
		echo $this->Form->input('from');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
