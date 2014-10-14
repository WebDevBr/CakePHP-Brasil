<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?php __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php $this->Html->link(__('New Blog'), ['action' => 'add']) ?></li>
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
		<table class="table">
		<thead>
			<tr>
				<th><?php $this->Paginator->sort('id') ?></th>
				<th><?php $this->Paginator->sort('title') ?></th>
				<th><?php $this->Paginator->sort('user_id') ?></th>
				<th><?php $this->Paginator->sort('tag_id') ?></th>
				<th><?php $this->Paginator->sort('category_id') ?></th>
				<th><?php $this->Paginator->sort('created') ?></th>
				<th><?php $this->Paginator->sort('modified') ?></th>
				<th class="actions"><?php __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($blogs as $blog): ?>
			<tr>
				<td><?php $this->Number->format($blog->id) ?></td>
				<td><?php h($blog->title) ?></td>
				<td>
					<?php $blog->has('user') ? $this->Html->link($blog->user->name, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?>
				</td>
				<td>
					<?php $blog->has('tag') ? $this->Html->link($blog->tag->title, ['controller' => 'Tags', 'action' => 'view', $blog->tag->id]) : '' ?>
				</td>
				<td>
					<?php $blog->has('category') ? $this->Html->link($blog->category->title, ['controller' => 'Categories', 'action' => 'view', $blog->category->id]) : '' ?>
				</td>
				<td><?php h($blog->created) ?></td>
				<td><?php h($blog->modified) ?></td>
				<td class="actions">
					<?php $this->Html->link(__('Edit'), ['action' => 'edit', $blog->id]) ?>
					<?php $this->Form->postLink(__('Delete'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?>
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