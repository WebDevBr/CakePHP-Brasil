<div id="swsh1" >	
<div id="page-header">	
	<!-- HEADER TOP BAR START BELOW -->
	<div class="headerbar clearfix">
		<div class="inner container">

			<div class="top-nav-left clearfix">
				
				<ul>
					<li>
						<div class="search-box">
							<form action="./search.php?style=46" method="get" id="search">
								<fieldset>
									<div class="inside-search-box">
					<input name="keywords" id="search_keywords" type="text" maxlength="128" title="Search for keywords" class="inputbox" value="Search…" />
										<input class="button2" type="submit" value="&#xf002" />	
									</div>						
								</fieldset>
							</form>
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
			<a href="./index.php?style=46" title="Board index" id="logo"><i class="fa fa-globe"></i><span class="logo-text">Charon</span></a>
			<!-- LOGO END --><!-- NAVIGATION LINKS START BELOW -->
			<div id="nav-menu" class="collapse navbar-collapse">
				<div class="nav-menu-inner">
					<ul class="nav navbar-nav navbar-right">
						 <?php
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Contato','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Jobs','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Opoio','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Registre-se','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-lock"></i> Login','/users/acesso',['escape'=>false]));

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