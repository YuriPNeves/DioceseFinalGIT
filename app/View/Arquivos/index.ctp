<div class="arquivos index">
	<h2><?php echo __('Arquivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arquivos as $arquivo): ?>
	<tr>
		<td><?php echo h($arquivo['Arquivo']['id']); ?>&nbsp;</td>
		<td><?php echo h($arquivo['Arquivo']['filename']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arquivo['Arquivo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $arquivo['Arquivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $arquivo['Arquivo']['id']), null, __('Tem certeza que deseja deletar # %s?', $arquivo['Arquivo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Arquivo'), array('action' => 'add')); ?></li>
	</ul>
</div>
