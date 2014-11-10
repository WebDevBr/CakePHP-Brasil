<!-- #footer start -->	
<div id="page-footer">
<div id="swsf1" >	
	<div id="footer-type-1">
	<div class="footer-top-bar">
		<div class="inner container clearfix">			

			<ul>
				<li><?php echo $this->Html->link('<i class="fa fa-home"></i> Home','/',['escape'=>false])?>
			</ul>

		</div>
	</div>

	<div class="footer-inner-bar">
		<div class="container clearfix">
			<div class="row">

				<div class="col-md-8 footer-links">

			    	<ul>
			<?php
			$authUser = !empty($authUser) ? $authUser : false;
			if($authUser){
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Meu Perfil','/devs/perfil',['escape'=>false]));
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Meus Artigos','/meus-artigos',['escape'=>false]));
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Sair','/devs/logout',['escape'=>false]));	
			}else{
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Registre-se','/devs/cadastro',['escape'=>false]));
				echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-lock"></i> Login','/users/acesso',['escape'=>false]));
			}
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Contato','/pages/contato',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Jobs','/pages/jobs',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Opoio','/pages/apoio',['escape'=>false]));
			?>
						
					</ul>
				<div class="copyright">Powered by <?php echo $this->Html->link('CakePHP Brasil','/') ?></div>

				</div>

				<div class="col-md-4 socials">					
			 					
					<ul>
						<?php
						echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-facebook"></i>','https://www.facebook.com/groups/cakebrasil/',['escape'=>false]));

						?>
						<li><a href="#" title="gplus"><i class="fa fa-google-plus"></i></a></li>					
					</ul>	
					
				</div>

			</div>
		</div>
	</div>
				

</div><!-- #footer END -->	
</div>
</diV>

<div>
	<a href="#" class="go-top hidden-xs go-top-visible"><i class="fa fa-chevron-up"></i></a>
</div>