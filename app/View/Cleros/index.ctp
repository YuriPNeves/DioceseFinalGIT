<br/><br/><br/><br/>
<div class="col m8 s12 l8 offset-m2 offset-l2">
<?php
echo $this->Crumb->addCrumb(array(
    array('Listar Themes', 'Cleros', 'index', NULL)
));
?>

<div class="row">
    <div class="col m12 l12 s12">
        <?php foreach ($cleros as $clero): ?>
            <ul class="collection">
                <li class="collection-item avatar">
                        <?php echo $this->Html->image('upload/pequeno/'.$clero['Clero']['imagem'], array('class' => 'circle')); ?>
                    <blockquote><?php echo h($clero['Clero']['nome']); ?></blockquote>
					<blockquote><?php echo h($clero['Clero']['role']); ?></blockquote>
                    </p>
                    <div class="secondary-content">
                        <?php
                        echo $this->Html->link($this->Html->tag('i', 'visibility', array('class' => 'material-icons white-text ')), 
						array('controller' => 'cleros', 'action' => 'view', $clero['Clero']['id']), array('escape' => FALSE, 
						'class' => 'btn-floating btn-small waves-effect waves-light purple tooltipped',
                        'data-position'=>'top', 'data-delay'=>'50', 'data-tooltip'=>"Visualizar ".$clero['Clero']['nome']));
                        ?>
                        <?php
                        //echo $this->Html->link($this->Html->tag('i', 'mode_edit', array('class' => 'material-icons white-text ')), array('action' => 'edit', $theme['Theme']['id']), array('escape' => false, 'class' => 'btn-floating btn-small waves-effect waves-light orange tooltipped',
                        //    'data-position'=>'bottom', 'data-delay'=>'50', 'data-tooltip'=> 'Editar categoria'));
                        ?>
                    </div>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>

<div class="row">
    <div class="col m12 l12 s12">
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Página {:page} de {:pages}, mostrando {:current} Cleros de um total de {:count}, começando em {:start}, terminando em {:end}')
            ));
            ?>		</p>
        <ul class="pagination">
            <?php
            echo $this->Paginator->prev('«', array('tag' => 'li'), '<a href="">«</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
            echo $this->Paginator->next('»', array('tag' => 'li'), '<a href="">»</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
            ?>
        </ul>
    </div>
</div>
</div>	