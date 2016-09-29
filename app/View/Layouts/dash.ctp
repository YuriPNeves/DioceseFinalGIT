<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>
            <?php //echo $sitename['Setting']['value'] ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        //echo $this->Html->scriptBlock('base_url = "' . $this->webroot . '";');
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        
		?>
    </head>
    <body>
        <div id="container-fluid">

            <div id="header">
                <div class="row">
                    <?php  echo $this->element('dash_nav')?>
                </div>
                <div class="row">
                    <?php //echo $this->element('footer') ?>
                </div>
            </div>
            <div id="content" class="row">
				<section class="col m3 l3 s12">
					<?php  echo $this->element('menu')?>
				</section>
                <section class="col m9 l9 s12 glue">
                    <div class="col-md-12 col-lg-12">
                        <?php echo $this->Session->flash(); ?>
                    </div>
                    <?php echo $this->fetch('content'); ?>
                </section>
            </div>
        </div>
        <?php #echo $this->element('sql_dump'); ?>
        <?php echo $this->Html->css('materialize.min'); ?>
        <?php echo $this->Html->css('font-awesome.min'); ?>
        <?php echo $this->Html->css('material_icons'); ?>
		<?php echo $this->Html->css('style');?>
        <?php echo $this->Html->script('jquery'); ?>
        <?php echo $this->Html->script('materialize.min'); ?>
        <?php echo $this->Html->script(array('/imgadmin/js/ckeditor/ckeditor.js')); ?>
        <?php echo $this->Html->script(array('imgadmin/admin.js')); ?>
		<?php echo $this->Html->script(array('funcoesdash')); ?>
    </body>
    <style>
        .pointernone{
            pointer-events: none;
        }
        .pointer{
            pointer-events: anything;
        }
    </style>
    <script>
        function confirmPass(){
            if($('#new_pass').val() === $('#confirm_pass').val()){
                $('#validation').remove();
                $('#confirm').removeAttr('disabled');
            }else{
                $('#validation').remove();
                $('#confirm_pass').after('<div class="data-error" id="validation">diferente</div>');
                $('#confirm').attr('disabled', true);
            }
        }
        
    </script>
</html>
