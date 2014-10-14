<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # %s?', $tag->id)]) ?></li>
		<li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="tags form large-10 medium-9 columns">
<?= $this->Form->create($tag) ?>
	<fieldset>
		<legend><?= __('Edit Tag'); ?></legend>
	<?=
		echo $this->Form->input('title');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
