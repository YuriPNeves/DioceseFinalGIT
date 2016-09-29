<div class="comunidades form">
<?php echo $this->Form->create('Comunidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Comunidade'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('telefone');
		echo $this->Form->input('imagem');
		echo $this->Form->input('responsavel');
		echo $this->Form->input('matriz');
		echo $this->Form->input('id_clero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comunidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
