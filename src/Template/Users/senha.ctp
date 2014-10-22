<div class="row">
	<div class="col-md-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<?php echo $this->Html->image('perfil/'.$user->photo, ['class'=>'img-responsive']);?>
				<hr>
				<?php echo $this->Html->link('Alterar seu perfil', '/devs/perfil', ['class'=>'btn btn-success btn-xs']);?>
			</div>
			<div class="col-md-7"><p><strong><?php echo $user->name;?></strong><hr><?php echo $user->description;?></p></div>
		</div>
	</div>
	
	</div>
	<div class="col-md-8">
	<?= $this->Form->create($user) ?>
		<fieldset>
			<legend><?= __('Atualizar senha'); ?></legend>
		<?php
			echo $this->Form->input('password', ['type'=>'text', 'label'=>'Sua nova senha']);
		?>
		</fieldset>
	<?= $this->Form->button(__('Salvar')) ?>
	<?= $this->Form->end() ?>
	</div>
</div>