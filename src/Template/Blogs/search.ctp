<h2><?php echo  "Busca por '". $searchTerm ."'"; ?></h2>

 <div class="forabg">
      <div class="inner"><span class="corners-top"><span></span></span>
      <ul class="topiclist">
        <li id="kd-header1" class="header kd-forum-class1 kd-forum-header collapse in">
          <dl class="icon">
            <dt>Últimos artigos</dt>
            <dd class="lastpost"><span>Autor</span></dd>
          </dl>
        </li>
      </ul>
      <ul class="topiclist forums kd-forum-class1 kd-forum-body collapse in" id="kd-forum1" >
	  	<?php foreach ($artigos as $artigo) : ?>
	    <li class="row">
	      <dl class="icon" style="background-image: url(	img/topic_read.svg); background-repeat: no-repeat;">
	        <dt title="No unread posts">
	        <?php echo $this->Html->link($artigo->title, '/artigo/'.$artigo->slug, ['escape'=>false,'class'=>'forumtitle']);?>
	               <?php if ($authUser['id'] == $artigo->user->id) :?> 
			<?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i> Editar', '/artigos/editar/'.$artigo->id, ['class'=>'btn btn-theme btn-xs', 'escape'=>false]);?>
			<?php endif;?>
	        </dt>
	        </dd>
	            <dfn>Por: </dfn> 
	            <?php echo $this->Html->link($artigo->user->name, '/'.$artigo->user->slug,['class'=>'username-coloured']);?>
	            <?php echo $this->Html->link('<i class="fa fa-arrow-circle-right last-post-icon"></i>', '/'.$artigo->user->slug,['class'=>'username-coloured','escape'=>false]);?><br /><?php echo $artigo->created->format(' \E\m\ d/m/Y \A\s\:\ H:i');?> </span>
	  
	          </dd>
	        
	      </dl>
	    </li>
	    <?php endforeach;?>
      </ul>

      <span class="corners-bottom"><span></span></span></div>
    </div>

	<ul class="pagination">
		<?php echo $this->element('paginator');?>
	</ul>
