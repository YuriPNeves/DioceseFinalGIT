<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo 'Diocese de Corumbá' ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
		
        
		echo $this->Html->meta('icon');

        echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('style');
        echo $this->Html->css('http://fonts.googleapis.com/icon?family=Material+Icons');
		

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body class="amber lighten-5 fabric-plaid">
        <?php echo $this->element('header')?>
        <div class="row">
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->element('footer'); ?>
        <?php echo $this->element('sql_dump'); ?>
        <?php echo $this->Html->script('https://code.jquery.com/jquery-2.1.1.min.js') ?>
        <?php echo $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.js') ?>
        <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js') ?>
        <?php echo $this->Html->script('jquery.scrollfire.min') ?>
        <?php echo $this->Html->script('funcoes') ?>
		
    </body>
</html>
