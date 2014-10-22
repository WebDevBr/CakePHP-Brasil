<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?= __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?></li>
			<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
		<table class="table">
		<thead>
			<tr>
				<th><?= $this->Paginator->sort('id') ?></th>
				<th><?= $this->Paginator->sort('title') ?></th>
				<th><?= $this->Paginator->sort('created') ?></th>
				<th><?= $this->Paginator->sort('modified') ?></th>
				<th class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($tags as $tag): ?>
			<tr>
				<td><?= $this->Number->format($tag->id) ?></td>
				<td><?= h($tag->title) ?></td>
				<td><?= h($tag->created) ?></td>
				<td><?= h($tag->modified) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
					<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		<div class="paginator">
			<ul class="pagination">
			<?php echo $this->element('paginator');?>
			</ul>
			<p><?= $this->Paginator->counter() ?></p>
		</div>
	</div>
</div>