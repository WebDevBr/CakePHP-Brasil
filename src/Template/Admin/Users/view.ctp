<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # %s?', $user->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="users view large-10 medium-9 columns">
	<h2><?= h($user->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($user->name) ?></p>
			<h6 class="subheader"><?= __('Photo') ?></h6>
			<p><?= h($user->photo) ?></p>
			<h6 class="subheader"><?= __('Email') ?></h6>
			<p><?= h($user->email) ?></p>
			<h6 class="subheader"><?= __('Password') ?></h6>
			<p><?= h($user->password) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($user->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($user->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($user->modified) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Description') ?></h6>
			<?= $this->Text->autoParagraph(h($user->description)); ?>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Blogs') ?></h4>
	<?= if (!empty($user->blogs)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Title') ?></th>
			<th><?= __('Content') ?></th>
			<th><?= __('Slug') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('Tag Id') ?></th>
			<th><?= __('Category Id') ?></th>
			<th><?= __('Created') ?></th>
			<th><?= __('Modified') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($user->blogs as $blogs): ?>
		<tr>
			<td><?= h($blogs->id) ?></td>
			<td><?= h($blogs->title) ?></td>
			<td><?= h($blogs->content) ?></td>
			<td><?= h($blogs->slug) ?></td>
			<td><?= h($blogs->user_id) ?></td>
			<td><?= h($blogs->tag_id) ?></td>
			<td><?= h($blogs->category_id) ?></td>
			<td><?= h($blogs->created) ?></td>
			<td><?= h($blogs->modified) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Blogs', 'action' => 'view', $blogs->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Blogs', 'action' => 'edit', $blogs->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Blogs', 'action' => 'delete', $blogs->id], ['confirm' => __('Are you sure you want to delete # %s?', $blogs->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= endif; ?>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Likes') ?></h4>
	<?= if (!empty($user->likes)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Blog Id') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('From') ?></th>
			<th><?= __('Created') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($user->likes as $likes): ?>
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
