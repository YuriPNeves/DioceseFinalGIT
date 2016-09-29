<div class="arquivos view">
<h2><?php echo __('Arquivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arquivo['Arquivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($arquivo['Arquivo']['filename']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Arquivo'), array('action' => 'edit', $arquivo['Arquivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Arquivo'), array('action' => 'delete', $arquivo['Arquivo']['id']), null, __('Are you sure you want to delete # %s?', $arquivo['Arquivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Arquivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Arquivo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
