<h2><?php echo $blog->title?></h2>
	<div id="p58" class="post bg2">
		<div class="inner"><span class="corners-top"><span></span></span>
		
	
	<dl class="postprofile" id="profile58">
		<dt>
			<span class="status-sign" title=" Offline"></span>		
			<?php
				$img_url = (empty($blog->user->photo))? 'default.jpg' : 'perfil/'.$blog->user->photo;
				echo $this->Html->link($this->Html->image($img_url),'#',['escape'=>false,'class'=>'img-thumbnail']);
			?>		
			<br>
			 <?php echo $this->Html->link($blog->user->name, '/'.$blog->user->slug,['escape'=>false,'class'=>'username-coloured']);?> 
		</dt>


	</dl>
	


	<div class="postbody">
			<h3 class="first"><?php echo $blog->title?></h3>
			<p class="author">
				<?php echo $this->Html->link('<i class="fa fa-file-o"></i>','/',['escape'=>false]); ?>
				Por <strong> <?php echo $this->Html->link($blog->user->name, '/'.$blog->user->slug,['escape'=>false,'class'=>'username-coloured']);?>  </strong>» <?php echo $blog->created->format('H\H \d\o \d\i\a j/n/Y');?>

				<br/>
			<a href="https://www.facebook.com/sharer/sharer.php?&display=popup&u=<?php echo $this->Url->build('/artigo/'.$blog->slug, true);?>" class="btn btn-primary btn-xs popup">
					<i class="fa fa-facebook"></i> Compartilhe</a>

<a href="<?php echo $this->Url->build('/artigo/'.$blog->slug.'#disqus_thread', true);?>" class="btn btn-default btn-xs comentarios">
<i class="fa fa-comments-o"></i> <span class="disqus-comment-count" data-disqus-url="<?php echo $this->Url->build('/artigo/'.$blog->slug, true);?>"></span> </a>

				<?php if ($authUser['id'] == $blog->user->id) :?>
					<?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i>
 Editar', '/artigos/editar/'.$blog->id, ['class'=>'btn btn-success btn-xs', 'escape'=>false]);?>
				<?php endif;?>
				</a> 
			</p>

			<div class="content">

		<?php echo $this->Markdown->toHtml($blog->content);?>
		<?php echo $this->Html->link('Página Inicial','/',['class'=>'left-box left']);?><br/>
		<hr>
		<?php echo $this->element('disqus');?>
			</div>

			

	</div><!-- postbody END-->

		<span class="corners-bottom"><span></span></span></div>
	</div>
