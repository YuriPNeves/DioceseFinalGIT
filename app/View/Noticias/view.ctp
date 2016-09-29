<div class="noticias view">
<h2><?php echo __('Noticia'); ?></h2>
	<dl>
		<dt><?php echo __('Título'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conteúdo'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['conteudo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['data']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Noticia'), array('action' => 'edit', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Tem certeza que deseja deletar esta notícia # %s?', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Noticias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Noticia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
