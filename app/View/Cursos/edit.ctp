<div class="cursos form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'))?>
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Curso'); ?></legend>
	<?php
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome do curso'),
		'type'=>'text'));
		echo('</div>');
		echo $this->Form->input('descricao',array('label'=>array('text'=>'Descrição'),'type'=>'textarea','class'=>'ckeditor'));
		echo('<div class="input-field col s12">');
				echo $this->Form->input('data', array(
		'type'=>'Date',
		'class'=> 'datepicker'));
		echo('</div>');
		echo('<div class="input-field col s12">');
		echo $this->Form->input('valor', array('label'=> array(
		'text'=>'Valor do curso'),
		'type'=>'number',
		'step'=>'0.01'));
		echo('</div>');
	?>
	</fieldset>
<?php echo $this->Button->alignButton('Cadastrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Curso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Curso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?></li>
	</ul>
</div>
