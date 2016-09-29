<div class="movimentos form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'))?>
<?php echo $this->Form->create('Movimento'); ?>
	<?php
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome do Movimento'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo('<div class="input-field col s12">');
		echo $this->Form->input('coordenador', array('label'=> array(
		'text'=>'Nome coordenador'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo $this->Form->input('atividades',array('type'=>'textarea','class'=>'ckeditor'));
	?>
<?php echo $this->Button->alignButton('Cadastrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>');?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Movimentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
