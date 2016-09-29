<div class="cleros form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'));
echo $this->Html->script(array(
    'imgadmin/admin.js'
));?>
<?php echo $this->Form->create('Clero'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Membro'); ?></legend>
	<?php
	
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome'),
		'type'=>'text',
		'pattern' => '[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo $this->Form->input('role', array('label'=>array('text'=>'Cargo'),
		'type'=> 'select',
		'options'=>array('empty'=>'Selecione um campo','padre'=>'Padre', 'bispo'=>'Bispo')));
		echo $this->Form->input('imagem', array('class'=>'img-select'));
		echo $this->Form->input('informacoes',array('type'=>'textarea','class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Cleros'), array('action' => 'index')); ?></li>
	</ul>
</div>
