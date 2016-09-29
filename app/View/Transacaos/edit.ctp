<div class="transacaos form">
<?php echo $this->Form->create('Transacao'); ?>
	<fieldset>
		<legend><?php echo __('Editar Transação'); ?></legend>
	<?php
		echo('<div class="input-field col s12">');
		echo $this->Form->input('nome_comprador', array('label'=> array(
		'text'=>'Nome'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo('<div class="input-field col s12">');
		echo $this->Form->input('email_comprador', array('label'=> array(
		'text'=>'Email'),
		'type'=>'email'));
		echo('</div>');
		echo $this->Form->input('curso_id', array('type' => 'select', 'label' => array(
            'text' => 'Escolha o curso'
        )));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Transações'), array('action' => 'index')); ?></li>
	</ul>
</div>
