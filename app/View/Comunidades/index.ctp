<div class="comunidades index">
	<h2><?php echo __('Comunidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('responsavel'); ?></th>
			<th><?php echo $this->Paginator->sort('matriz'); ?></th>
			<th><?php echo $this->Paginator->sort('id_clero'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comunidades as $comunidade): ?>
	<tr>
		<td><?php echo h($comunidade['Comunidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['nome']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['imagem']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['responsavel']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['matriz']); ?>&nbsp;</td>
		<td><?php echo h($comunidade['Comunidade']['id_clero']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comunidade['Comunidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comunidade['Comunidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comunidade['Comunidade']['id']), null, __('Are you sure you want to delete # %s?', $comunidade['Comunidade']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Comunidade'), array('action' => 'add')); ?></li>
	</ul>
</div>
