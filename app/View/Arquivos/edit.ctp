<div class="arquivos form">
<?php echo $this->Form->create('Arquivo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Arquivo'); ?></legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('filename', array('class'=>'img-select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Arquivo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Arquivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Arquivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
