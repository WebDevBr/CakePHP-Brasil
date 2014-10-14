<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Blog'), ['action' => 'edit', $blog->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Blog'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # %s?', $blog->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Blogs'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="blogs view large-10 medium-9 columns">
	<h2><?= h($blog->title) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Title') ?></h6>
			<p><?= h($blog->title) ?></p>
			<h6 class="subheader"><?= __('Slug') ?></h6>
			<p><?= h($blog->slug) ?></p>
			<h6 class="subheader"><?= __('User') ?></h6>
			<p><?= $blog->has('user') ? $this->Html->link($blog->user->name, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Tag') ?></h6>
			<p><?= $blog->has('tag') ? $this->Html->link($blog->tag->title, ['controller' => 'Tags', 'action' => 'view', $blog->tag->id]) : '' ?></p>
			<h6 class="subheader"><?= __('Category') ?></h6>
			<p><?= $blog->has('category') ? $this->Html->link($blog->category->title, ['controller' => 'Categories', 'action' => 'view', $blog->category->id]) : '' ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($blog->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($blog->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($blog->modified) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Content') ?></h6>
			<?= $this->Text->autoParagraph(h($blog->content)); ?>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Likes') ?></h4>
	<?= if (!empty($blog->likes)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Blog Id') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('From') ?></th>
			<th><?= __('Created') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($blog->likes as $likes): ?>
		<tr>
			<td><?= h($likes->id) ?></td>
			<td><?= h($likes->blog_id) ?></td>
			<td><?= h($likes->user_id) ?></td>
			<td><?= h($likes->from) ?></td>
			<td><?= h($likes->created) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Likes', 'action' => 'view', $likes->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Likes', 'action' => 'edit', $likes->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Likes', 'action' => 'delete', $likes->id], ['confirm' => __('Are you sure you want to delete # %s?', $likes->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= endif; ?>
	</div>
</div>
