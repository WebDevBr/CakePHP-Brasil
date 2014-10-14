<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?php __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php $this->Html->link(__('New Tag'), ['action' => 'add']) ?></li>
			<li><?php $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
		<table class="table">
		<thead>
			<tr>
				<th><?php $this->Paginator->sort('id') ?></th>
				<th><?php $this->Paginator->sort('title') ?></th>
				<th><?php $this->Paginator->sort('created') ?></th>
				<th><?php $this->Paginator->sort('modified') ?></th>
				<th class="actions"><?php __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($tags as $tag): ?>
			<tr>
				<td><?php $this->Number->format($tag->id) ?></td>
				<td><?php h($tag->title) ?></td>
				<td><?php h($tag->created) ?></td>
				<td><?php h($tag->modified) ?></td>
				<td class="actions">
					<?php $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
					<?php $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		<div class="paginator">
			<ul class="pagination">
			<?php echo $this->element('paginator');?>
			</ul>
			<p><?php $this->Paginator->counter() ?></p>
		</div>
	</div>
</div>