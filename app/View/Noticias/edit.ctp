<div class="noticias form">
<?php echo $this->Form->create('Noticia'); ?>
	
	<?php
	echo('<div class="input-field col s12">');
		echo $this->Form->input('titulo', array('label'=> array(
		'text'=>'Título da notícia'),
		'type'=>'text',
		'pattern' => '[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo $this->Form->input('conteudo',array('type'=>'textarea','class'=>'ckeditor'));
		
		echo $this->Form->input('imagem', array('class'=>'img-select'));
		
		echo $this->Form->input('data', array(
		'type'=>'Date',
		'class'=> 'datepicker'));
	
	?>
	
<?php echo $this->Button->alignButton('Editar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>');?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Noticias'), array('action' => 'index')); ?></li>
	</ul>
</div>
