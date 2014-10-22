<center><a href="https://www.facebook.com/sharer/sharer.php?&display=popup&u=<?php echo $this->Url->build('/'.$user->slug, true);?>" class="btn btn-primary popup">
			<span class="glyphicon glyphicon-share-alt"></span> Compartilhe
		</a></center>

<hr>

<h2>Meus artigos</h2>

<?php foreach ($artigos as $artigo) :?>
	<h3>
		<?php echo $this->Html->link($artigo->title.'  <small><span class="glyphicon glyphicon-link"></span> </small>', '/artigo/'.$artigo->slug, ['escape'=>false]);?>
	</h3>
	<p><small>Escrito por: <?php echo $this->Html->link($artigo->user->name, '/'.$artigo->user->slug);?> as <?php echo $artigo->created->format('H\H \d\o \d\i\a j/n/Y');?></small></p>
	<?php echo $this->Html->image('perfil/'.$artigo->user->photo, ['class'=>'img-left']);?>
	<p>
		<?php echo $this->Markdown->toHtmlResume($artigo->content, 200); ?>
	</p>
	<?php echo $this->Html->link('<span class="glyphicon glyphicon-link"></span> Leia mais', '/artigo/'.$artigo->slug, ['class'=>'btn btn-default btn-xs', 'escape'=>false]);?>
	<a href="https://www.facebook.com/sharer/sharer.php?&display=popup&u=<?php echo $this->Url->build('/artigo/'.$artigo->slug, true);?>" class="btn btn-primary btn-xs popup">
		<span class="glyphicon glyphicon-share-alt"></span> Compartilhe
	</a>
	<?php if ($authUser['id'] == $artigo->user->id) :?>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Editar', '/artigos/editar/'.$artigo->id, ['class'=>'btn btn-success btn-xs', 'escape'=>false]);?>
	<?php endif;?>

	<hr>
	
<?php endforeach;?>
<ul class="pagination">
	<?php echo $this->element('paginator');?>
</ul>