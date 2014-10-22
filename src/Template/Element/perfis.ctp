<h3>Devs</h3>

<?php foreach ($perfis as $perfil): ?>
	<a href="<?php echo $this->Url->build('/'.$perfil->slug, true);?>" title="Perfil de <?php echo $perfil->name;?>">
		<?php
			echo $this->Html->image('perfil/'.$perfil->photo, ['class'=>'img-thumbnail perfil', 'alt'=>'Perfil de '.$perfil->name]);
		?>
	</a>
<?php endforeach;?>