<div class="movimentos view">
<h2><?php echo __('Movimentos'); ?></h2>
	<dl>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($movimento['Movimento']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordenador'); ?></dt>
		<dd>
			<?php echo h($movimento['Movimento']['coordenador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atividades'); ?></dt>
		<dd>
			<?php echo h($movimento['Movimento']['atividades']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
