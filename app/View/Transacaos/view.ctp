<div class="transacaos view">
<h2><?php echo __('Transação'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transacao['Transacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Comprador'); ?></dt>
		<dd>
			<?php echo h($transacao['Transacao']['nome_comprador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('curso_id'); ?></dt>
		<dd>
			<?php echo h($transacao['Transacao']['curso_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
