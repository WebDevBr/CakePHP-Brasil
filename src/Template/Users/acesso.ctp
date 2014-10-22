<div class="row">
<div class="col-md-4 col-md-push-4">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create(); ?>
    <fieldset>
        <legend><?php echo __('Seus dados de acesso'); ?></legend>
        <?php echo $this->Form->input('email'); ?>
        <?php echo $this->Form->input('password', ['label'=>'Senha']); ?>
    </fieldset>
<?php echo $this->Form->button(__('Login')); ?>
<?php echo $this->Form->end(); ?>
</div>
</div>