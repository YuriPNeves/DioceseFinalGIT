<div class="col m10 s12 l10 offset-m1 offset-l1">
<div class="transacaos form">
<?php echo $this->Form->create('Transacao'); ?>
	<?php
		echo('<br/><br/><br/><div class="input-field col s12">');
		echo $this->Form->input('nome_comprador', array('label'=> array(
		'text'=>'Nome'),
		'type'=>'text',
		'pattern'=>'[a-zà-ú A-ZÀ-Ú]+'));
		echo('</div>');
		echo('<div class="input-field col s12">');
		echo $this->Form->input('email_comprador', array('label'=> array(
		'text'=>'Email'),
		'type'=>'email'));
		echo('</div>');
		
			echo '<div class="col m3 s4 l3">';
				echo('<div class="input-field">');
					echo $this->Form->input('ddd', array('label'=> array(
						'text'=>'DDD da sua cidade'),
						'maxlength'=>'2',
						'min' => 1,
						'max' => 99,
						'pattern'=>'[0-9]'));
				echo('</div>');
			echo '</div>';
			
			echo '<div class ="col m9 s8 l9">';
				echo('<div class="input-field col s12">');
					echo $this->Form->input('telefone', array('label' => array(
						'text' => 'Telefone'),
						'type' => 'tel',
						'maxlength'=> '9',
						
						'pattern' => '[0-9]{4,5}[0-9]{4}'));
				echo('</div>');
			echo '</div>';
		
		
		echo $this->Form->input('curso_id', array('type' => 'select', 'label' => array(
            'text' => 'Escolha o curso'
        )));
	?>
	
<?php   echo $this->Button->alignButton('Inscrever', 'right', 'btn-flat','<i class="material-icons right">arrow_forward</i>'); ?>
</div>

</div>