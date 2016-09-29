<div class="movimentos form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'))?>
<?php echo $this->Form->create('Movimento'); ?>
		<legend><?php echo __('Edit Movimento'); ?></legend>
	<?php
	echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome do Movimento'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo('<div class="input-field col s12">');
		echo $this->Form->input('coordenador', array('label'=> array(
		'text'=>'Nome do coordenador'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo $this->Form->input('texto',array('type'=>'textarea','class'=>'ckeditor'));
	?>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Movimentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
