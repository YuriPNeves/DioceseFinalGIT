<div class="users form">
<?php echo $this->Form->create('User'); ?>
	
		
	<?php
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo $this->Form->input('role', array('label'=>array('text'=>'Permissão'),
		'type' => 'select',
		'options' =>array('empty'=>'Selecione uma permissão','admin'=>'Administrador', 'user'=>'Comum')));
		echo ('<div class="input-field col s12">');
		echo $this->Form->input('username', array('label'=> array(
		'text'=>'Email'),
		'type'=>'email',));
		echo ('</div>');
		echo ('<div class="input-field col s12">');
		echo $this->Form->input('password', array('label'=> array(
		'text'=>'Senha'),
		'type'=>'password'));
		echo('</div>');
		
	?>

<?php echo $this->Button->alignButton('Cadastrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
</div>

