<div class="cursos form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'))?>
<?php echo $this->Form->create('Curso'); ?>

	<?php
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome do curso'),
		'type'=>'text'));
		echo('</div>');
		echo $this->Form->input('descricao',array('label'=>array('text'=>'Descrição'),'type'=>'textarea','class'=>'ckeditor'));
		
		echo $this->Form->input('data', array(
		'type'=>'Date',
		'class'=> 'datepicker'));
		
		echo('<div class="input-field col s12">');
		echo $this->Form->input('valor', array('label'=> array(
		'text'=>'Valor do curso'),
		'type'=>'number',
		'step'=>'0.01'));
		echo('</div>');
		
	?>
<?php echo $this->Button->alignButton('Cadastrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
<?php echo $this->Form->end(); ?>
</div>
