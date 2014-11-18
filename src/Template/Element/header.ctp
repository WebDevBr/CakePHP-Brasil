<div id="swsh1" >	
<div id="page-header">	
	<!-- HEADER TOP BAR START BELOW -->
	<div class="headerbar clearfix">
		<div class="inner container">

			<div class="top-nav-left clearfix">
				
				<ul>
					<li>
						<div class="search-box">
						<?php
							$formAction = $this->Url->build('/busca');
                            $searchInput = null;
                            if(!empty($searchTerm)) $searchInput = $searchTerm;

                            echo "<form method=\"get\" action=\"{$formAction}\" class=\"header-search-form\" id='search'>";
                            echo '<fieldset>';
                            echo '<div class="inside-search-box">';
                            echo "<input type=\"text\" name=\"s\" value=\"{$searchInput}\" placeholder=\"Busca...\" id=\"searchInput\" class='inputbox'/>";
                            echo '<input class="button2" type="submit" value="&#xf002" />	';
                            echo '</div>';
                             echo '</fieldset>';
                            echo '</form>';
                        ?>
		
						</div>
					</li>						
				</ul>		
				
			</div>

			<div class="top-nav-right clearfix">
				<ul>
					
					<li class="visible-xs kd-no-modal"><a href="./ucp.php?style=46&amp;mode=login" title="Login" accesskey="x"><i class="fa fa-cloud-download"></i> Login</a></li>

					<li class="hidden-xs"><a href="#" title="Login"data-toggle="modal" data-target=".kd-modal-login" accesskey="x"  style="border-radius:3px;" ><i class="fa fa-cloud-download"></i> Login</a></li>	
				</ul>				
			</div>										

		</div>
	</div>
	<!-- HEADER TOP BAR END --><!-- HEADER FIXED NAVBAR START BELOW -->
	<div id="page-header-nav" class="navbar navbar-default" role="navigation">
		<div class="container">

			<!-- THE BUTTON FOR RESPONSIVE MENU START BELOW--> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- THE BUTTON FOR RESPONSIVE MENU END --><!-- LOGO START BELOW-->
			<?php echo $this->Html->link($this->Html->image('logo.png'),'/',['id'=>'logo','escape'=>false]);?>
			<!-- LOGO END --><!-- NAVIGATION LINKS START BELOW -->
			<div id="nav-menu" class="collapse navbar-collapse">
				<div class="nav-menu-inner">
					<ul class="nav navbar-nav navbar-right">
			<?php
			$authUser = !empty($authUser) ? $authUser : false;

			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Contato','/pages/contato',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Jobs','/pages/jobs',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Opoio','/pages/apoio',['escape'=>false]));

			if($authUser){
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Sair','/devs/logout',['escape'=>false]));	
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Meu Perfil','/devs/perfil',['escape'=>false]));
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Meus Artigos','/meus-artigos',['escape'=>false]));
			}else{
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Registre-se','/devs/cadastro',['escape'=>false]));
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-lock"></i> Login','/users/acesso',['escape'=>false]));
			}
			?>

					</ul><!-- end nav navbar-nav navbar-right -->

	
				</div><!-- NAV-MENU-INNER END -->	
			</div><!-- #NAV-MENU END --><!-- NAVIGATION LINKS END -->	

		</div><!-- CONTAINER END -->
	</div>
	<!-- HEADER FIXED NAVBAR END -->		

</div>	
	</div>



		<!-- MODAL LOGIN START BELOW -->
	<div class="modal fade kd-modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-kd">
			<div class="modal-content">


				<?php  echo $this->Form->create(null, array('url' => array('controller'=>'users','action' => 'acesso')));?>
					<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>      
				        <h4 class="modal-title" id="myModalLabel">Login</h4>						
				    </div>
				    
				    <div class="modal-body">
				    	<div class="form-group">
				    		<fieldset class="quick-login">
				    			<label class="control-label" for="username">E-mail:</label>
				    			<?php echo $this->Form->input('email',array('class'=> 'inputbox form-control','label'=>false)); ?>
				    			<label class="control-label" for="password">Senha:</label>&nbsp;
				    			<?php echo $this->Form->input('password',array('class'=> 'inputbox form-control','label'=>false)); ?>

			
				    			
				    			
				    			<input type="submit" name="login" value="Login" class="button2" />

				    		</fieldset>
				    	</div>				
					</div>
				<?php echo $this->Form->end(); ?>
			</div>	
		</div>	
	</div>