<div class="arquivos form">
<?php echo $this->Form->create('Arquivo'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Arquivo'); ?></legend>
	<?php
		echo $this->Form->input('filename', array('class'=>'img-select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Arquivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
