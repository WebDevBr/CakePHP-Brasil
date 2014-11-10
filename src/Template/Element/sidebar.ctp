 <div id="sidebar">
          <!-- Sidebar block start below -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Devs</h4>
  </div>
  <div class="panel-body">  
 <?php foreach ($perfis as $perfil): ?>
	<a href="<?php echo $this->Url->build('/'.$perfil->slug, true);?>" title="Perfil de <?php echo $perfil->name;?>">
		<?php
		$img_url = (empty($perfil->photo))? 'default.jpg' : 'perfil/'.$perfil->photo;
			echo $this->Html->image($img_url, ['class'=>'img-thumbnail perfil', 'alt'=>'Perfil de '.$perfil->name]);
		?>
	</a>
<?php endforeach;?>

  </div>  
</div>  
</div>