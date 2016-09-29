<div class="transacaos index">
	<h2><?php echo __('Transações'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_comprador'); ?></th>
			<th><?php echo $this->Paginator->sort('Curso'); ?></th>
	</tr>
	<?php foreach ($transacaos as $transacao): ?>
	<tr>
		<td><?php echo h($transacao['Transacao']['id']); ?>&nbsp;</td>
		<td><?php echo h($transacao['Transacao']['nome_comprador']); ?>&nbsp;</td>
		<td><?php echo h($transacao['Transacao']['email_comprador']); ?>&nbsp;</td>
		<td><?php echo h($transacao['Transacao']['ddd']); ?>&nbsp;</td>
		<td><?php echo h($transacao['Transacao']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($transacao['Curso']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transacao['Transacao']['id'])); ?>
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
