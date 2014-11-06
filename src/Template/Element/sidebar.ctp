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
<!-- Sidebar block END --><!-- Sidebar Collapsible Group -->
<div class="panel-group" id="sidebar-accordion">
<!-- Sidebar Collapsible Group block start below -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <a  title="Click to Open/Close" class="kd-btn-collapse" data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapse-sidebar-block1"></a>
      <h4 class="panel-title">        
          Collapsible Group Item #1        
      </h4>      
    </div>
    <div id="collapse-sidebar-block1" class="panel-collapse collapse in">
      <div class="panel-body">
      <a target="_blank" title="buy Charon - phpbb3 style on themeforest" href="./viewforum.php?style=40&f=11"><img height="250" width="250" alt="Buy Charon phpBB3 theme" src="theme/images/demo/buyit.png"/></a>   
         
      </div>
    </div>
  </div>
  <!-- Sidebar Collapsible Group block END --><!-- Sidebar Collapsible Group block start below -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <a  title="Click to Open/Close" class="kd-btn-collapse collapsed" data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapse-sidebar-block2"></a>
      <h4 class="panel-title">        
          Collapsible Group Item #2
      </h4>      
    </div>
    <div id="collapse-sidebar-block2" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
      </div>
    </div>
  </div>
  <!-- Sidebar Collapsible Group block END --><!-- Sidebar Collapsible Group block start below -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <a  title="Click to Open/Close" class="kd-btn-collapse collapsed" data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapse-sidebar-block3"></a>
      <h4 class="panel-title">        
          Collapsible Group Item #3       
      </h4>      
    </div>
    <div id="collapse-sidebar-block3" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
      </div>
    </div>
  </div>
  <!-- Sidebar Collapsible Group block END -->

</div>
<!-- Sidebar Collapsible Group END -->
        </div>