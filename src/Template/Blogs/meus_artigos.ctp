
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
              <h1 id="indicators"><?php echo __('Meus artigos'); ?></h1>
</div>

		<div class="pull-right">
		 <?php echo $this->Html->link('novo', ['action'=>'novo'], ['class'=>'btn btn-primary']);?>
		</div>
		<br/><br/>

		<table class="table table-hover table-striped meus-artigos">
			<thead>
				<tr>
					<th>Artigo</th>
					<th class="text-right">Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($artigos as $artigo): ?>
				<tr>
					<td><?php echo $artigo->title;?></td>
					<td class="text-right">
						<?php echo $this->Html->link('ver', '/artigo/' . $artigo->slug, ['class'=>'btn btn-success  btn-sm']);?>
						<?php echo $this->Html->link('editar', ['action'=>'editar', $artigo->id], ['class'=>'btn btn-primary  btn-sm']);?>
						<?php echo $this->Html->link('remover', ['action'=>'remover', $artigo->id], ['class'=>'btn btn-danger btn-sm']);?>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
		<div class="paginator">
			<ul class="pagination">
				<?php echo $this->element('paginator');?>
			</ul>
			<p><?php echo $this->Paginator->counter() ?></p>
		</div>
	</div>
</div>