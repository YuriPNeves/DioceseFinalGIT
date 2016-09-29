<div class="row valign-wrapper" style="min-height: 70vh">
    
    <div class="col m8 l8 s12">
            <div class="card-panel hoverable lighten-1 grey-text center-align">
                <?php echo $this->Form->create('User'); ?>
            <?php
        echo $this->Form->input('username', array('label' => array(
                'text' => 'Nome de usuário'),
                'type' => 'text',
                'required' => TRUE,
                'before' => '<i class="fa fa-user prefix"></i>',
            'div' => array('class' => 'input-field col s12 m6 l6')));
        ?>
        
            <?php
        echo $this->Form->input('password', array('label' => array(
                'text' => 'Senha'),
                'type' => 'password',
                'before' => '<i class="fa fa-key prefix"></i>',
              'div' => array('class' => 'input-field col s12 m6 l6')));
        ?>
        
        
        <?php echo $this->Button->alignButton('Entrar', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
        <?php echo $this->Form->end(); ?>
            </div>
    </div>
</div>
