<nav class="grey darken-3">
    <div class="nav-wrapper">
        <a href="/" class="brand-logo center"><?php echo h('Diocese de Corumbá') ?></a>
        <?php if($this->Session->check('Auth.User.id')):?>
        <ul class="right">
            <li><a href="/DioceseFinal/gallery"><i class="material-icons">camera</i></a></li>
            <li><a href="/Settings"><i class="material-icons">more_vert</i></a></li>
            <li><a href="/Users/logout"><i class="fa fa-sign-out "></i></a></li>
        </ul>
        <?php endif;?>
        
        <ul class="left">
            <li><a href="/dashboard"><i class="material-icons">dashboard</i></a></li>
            <li><a href="/"><i class="material-icons">visibility</i></a></li>
        </ul>
        
    </div>
</nav>