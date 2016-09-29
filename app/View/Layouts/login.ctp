<!DOCTYPE html>
<html>
    <head>
        <base href="/">
        <?php echo $this->Html->charset(); ?>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>
            <?php //echo $sitename['Setting']['value'] ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('style');
        echo $this->Html->css('http://fonts.googleapis.com/icon?family=Material+Icons');
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body class="amber lighten-5 fabric-plaid">
            <?php echo $this->element('header')?>
            <div id="content" class="row">
                <div class="container">
                        <?php //echo $this->Flash->render(); ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
            </div>
        <?php echo $this->Html->script('https://code.jquery.com/jquery-2.1.1.min.js') ?>
        <?php echo $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.js') ?>
        <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js') ?>
        <?php echo $this->Html->script('login') ?>
    </body>
</html>
