<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?= __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
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
		<?php foreach ($categories as $category): ?>
			<tr>
				<td><?= $this->Number->format($category->id) ?></td>
				<td><?= h($category->title) ?></td>
				<td><?= h($category->created) ?></td>
				<td><?= h($category->modified) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
					<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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