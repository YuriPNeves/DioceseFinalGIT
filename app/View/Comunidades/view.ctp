<div class="comunidades view">
<h2><?php echo __('Comunidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['responsavel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matriz'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['matriz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Clero'); ?></dt>
		<dd>
			<?php echo h($comunidade['Comunidade']['id_clero']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comunidade'), array('action' => 'edit', $comunidade['Comunidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comunidade'), array('action' => 'delete', $comunidade['Comunidade']['id']), null, __('Are you sure you want to delete # %s?', $comunidade['Comunidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunidade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
