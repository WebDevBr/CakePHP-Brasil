<div class="row">
	<div class="col-md-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<p><?php echo $this->Html->link('Alterar sua senha', '/devs/senha', ['class'=>'btn btn-success btn-xs']);?></p>
				<p><?php echo $this->Html->link('Veja seus artigos', '/meus-artigos', ['class'=>'btn btn-default btn-xs']);?></p>
				<p><?php echo $this->Html->link('Deslogar', '/devs/logout', ['class'=>'btn btn-danger btn-xs']);?></p>
			</div>
			<div class="col-md-7"><p><strong><?php echo $user->name;?></strong><hr><?php echo $user->description;?></p></div>
		</div>
	</div>
	
	</div>
	<div class="col-md-8">
	<?= $this->Form->create($user, ['type' => 'file']) ?>
		<fieldset>
			<legend><?= __('Atualizar perfil'); ?></legend>
		<?php
			echo $this->Form->input('name', ['label'=>'Seu nome']);
			echo $this->Form->input('description', ['label'=>'Um pouco sobre você']);
			echo $this->Form->input('photo', ['label'=>'Sua foto','type' => 'file']);
			echo $this->Form->input('email');
		?>
		</fieldset>
	<?= $this->Form->button(__('Salvar')) ?>
	<?= $this->Form->end() ?>
	</div>
</div>