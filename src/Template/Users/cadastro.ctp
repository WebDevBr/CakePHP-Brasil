<div class="row">
	<div class="col-md-9">
	<?php echo $this->Form->create($user); ?>
		<fieldset>
			<legend><?php echo __('Preencha seus dados'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('photo');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php echo $this->Form->button(__('Submit')) ?>
	<?php echo $this->Form->end() ?>
	</div>
</div>