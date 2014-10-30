<div class="row">
	<div class="col-md-12">
	<?php echo $this->Form->create($blog) ?>
		<fieldset>
			<legend><?php __('Novo artigo'); ?></legend>
		<?php
			echo $this->Form->input('title', ['label' => 'Título do artigo']);
		?>
		<div id="epiceditor"></div>
		<hr>
		<?php
			echo $this->Form->input('content', ['type'=>'hidden', 'id'=>'editor']);
		?>
		</fieldset>
	<?php echo $this->Form->button(__('Salvar')) ?>
	<?php echo $this->Form->end() ?>
	</div>
</div>

<?php

//echo $this->Html->css([], null, ['inline'=>false])
echo $this->Html->script(['/epiceditor/js/epiceditor.min.js'], ['block'=>true]);
echo $this->Html->scriptBlock("
	var opts = {
	  container: 'epiceditor',
	  textarea: editor,
	  basePath: 'epiceditor',
	  clientSideStorage: true,
	  localStorageName: 'epiceditor',
	  useNativeFullscreen: true,
	  parser: marked,
	  file: {
	    name: 'epiceditor',
	    defaultContent: 'Seu artigo em MarkDown',
	    autoSave: false
	  },
	  theme: {
	    base: base_url+'epiceditor/themes/base/epiceditor.css',
	    preview: base_url+'epiceditor/themes/preview/preview-light.css',
	    editor: base_url+'epiceditor/themes/editor/epic-light.css'
	  },
	  button: {
	    preview: true,
	    fullscreen: true,
	    bar: 'auto'
	  },
	  focusOnLoad: false,
	  shortcut: {
	    modifier: 18,
	    fullscreen: 70,
	    preview: 80
	  },
	  string: {
	    togglePreview: 'Pré-visualizar',
	    toggleEdit: 'Modo de edição',
	    toggleFullscreen: 'Mode tela cheia'
	  },
	  autogrow: {
	  	minHeight: 500,
	  	maxHeight: 1500
	  }
	}
	editor = new EpicEditor(opts).load()
", ['block'=>true]);