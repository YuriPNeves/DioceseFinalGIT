<div class="users form">
<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Editar Usuário'); ?></legend>
	<?php
		echo ('<div class="input-field col s12">');
		echo $this->Form->input('nome', array('label'=> array(
		'text'=>'Nome'),
		'type'=>'txt',
		'pattern'=>'[a-z A-Z]+',
		'message'=>'Não é permido símbolos ou números'));
		echo('</div>');
		
		echo $this->Form->input('role', array('label'=> array(
			'text'=>'Permissão'),
			'options' => array('admin' => 'Admin', 'user' => 'Comum')));
			
		echo ('<div class="input-field col s12">');
		echo $this->Form->input('username', array('label'=> array(
		'text'=>'Email'),
		'type'=>'email'));
		echo('</div>');
		echo ('<div class="input-field col s12">');
		echo $this->Form->input('password', array('label'=> array(
		'text'=>'Senha'),
		'type'=>'password'));
		echo('</div>');
	?>
<?php echo $this->Button->alignButton('Editar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
</div>
