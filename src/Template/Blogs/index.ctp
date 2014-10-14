<h3>Últimos artigos</h3>

<?php foreach ($artigos as $artigo) :?>
<p>
	<?php echo $this->Html->link($artigo->title, '/artigo/'.$artigo->slug);?>
</p>
<?php endforeach;?>