<div class="alert alert-success">
	<center>
		<h3><?php echo $artigo_msg;?></h3>
		<hr>
		<p>
			<?php echo $this->Html->link(
				'Crie seu primeiro artigo!',
				'/artigos/novo',
				['class'=>'btn btn-success btn-lg']
			);?>
		</p>
	</center>
</div>