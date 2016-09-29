<div class="cursos view">
<h2><?php echo __('Curso'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
