<div class="cleros form">
<?php echo $this->Form->create('Clero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Clero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('imagem');
		echo $this->Form->input('nome');
		echo $this->Form->input('role', array(
            'options' => array('padre' => 'Padre', 'bispo' => 'Bispo')
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clero.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cleros'), array('action' => 'index')); ?></li>
	</ul>
</div>
