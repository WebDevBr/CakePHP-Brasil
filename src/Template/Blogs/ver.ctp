<p><center><small>Escrito por: <?php echo $this->Html->link($blog->user->name, '/'.$blog->user->slug);?> as <?php echo $blog->created->format('H\H \d\o \d\i\a j/n/Y');?></small> <a href="https://www.facebook.com/sharer/sharer.php?&display=popup&u=<?php echo $this->Url->build('/artigo/'.$blog->slug, true);?>" class="btn btn-primary btn-xs popup">
			<span class="glyphicon glyphicon-share-alt"></span> Compartilhe
		</a>
		<?php if ($authUser['id'] == $blog->user->id) :?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Editar', '/artigos/editar/'.$blog->id, ['class'=>'btn btn-success btn-xs', 'escape'=>false]);?>
		<?php endif;?>
</center></p>
<?php echo $this->Markdown->toHtml($blog->content);?>