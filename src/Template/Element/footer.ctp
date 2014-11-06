<!-- #footer start -->	
<div id="page-footer">
<div id="swsf1" >	
	<div id="footer-type-1">
	<div class="footer-top-bar">
		<div class="inner container clearfix">			

			<ul>
				<li><a href="./index.php?style=46" accesskey="h"><i class="fa fa-home"></i> Board index</a></li>				
				
			</ul>

		</div>
	</div>

	<div class="footer-inner-bar">
		<div class="container clearfix">
			<div class="row">

				<div class="col-md-8 footer-links">

			    	<ul>
			 <?php
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Contato','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Jobs','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Opoio','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-user"></i> Registre-se','/devs/cadastro',['escape'=>false]));
			echo $this->Html->tag('li',$this->Html->link('<i class="fa fa-lock"></i> Login','/users/acesso',['escape'=>false]));

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