<div class="actions columns large-2 medium-3">
	<h3><?php __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?php $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # %s?', $tag->id)]) ?></li>
		<li><?php $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
		<li><?php $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
		<li><?php $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="tags form large-10 medium-9 columns">
<?php $this->Form->create($tag) ?>
	<fieldset>
		<legend><?php __('Edit Tag'); ?></legend>
	<?php
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php $this->Form->button(__('Submit')) ?>
<?php $this->Form->end() ?>
</div>
