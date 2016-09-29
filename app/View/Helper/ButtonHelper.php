<?php
App::uses('AppHelper', 'View/Helper');
/**
 * Description of ButtonHHelper
 *
 * @author Felipe Jimenez
 */
class ButtonHelper extends AppHelper{
    public function alignButton($textSave = 'Salvar',$align = "right", $classButton = "teal",$icon = '<i class="material-icons right">publish</i>', $id = 'btn-save', $sizeButton = FALSE){?>
    <div class="form-group">
        <div class="row">
            <div class="com-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2" style="padding-top: 5%;text-align: <?php echo $align;?>">
                <div class="btn-group" role="group" aria-label="...">
                
                <?php echo $this->Form->button($icon.' '.$textSave.'', array('type' => 'submit', 
                    'id' => $id,'class' => 'btn '. h($sizeButton ? 'btn-large' :'' ). ' '.$classButton.' waves-effect waves-light')); ?>

                </div>
        </div>
        </div>
    </div>
    <?php }
}
