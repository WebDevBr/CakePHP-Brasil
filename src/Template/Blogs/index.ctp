<div class="row">
	<div class="col-md-9">
		<h2>Últimos artigos</h2>

		<?php foreach ($artigos as $artigo) :?>
		<h3>
			<?php echo $this->Html->link($artigo->title, '/artigo/'.$artigo->slug);?>
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

		<hr>
		
		<?php endforeach;?>
	</div>
</div>