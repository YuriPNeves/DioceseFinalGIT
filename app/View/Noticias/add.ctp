<div class="noticias form">
<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js','imgadmin/admin.js','/imgadmin/js/ckeditor/ckeditor.js'));
echo $this->Html->script(array(
    'imgadmin/admin.js'
));?>


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
		'type'=>'text',
		'class'=> 'datepicker'));
		
	?>
	
<?php echo $this->Button->alignButton('Cadastrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>');?>
</div>