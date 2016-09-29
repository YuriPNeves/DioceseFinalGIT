<footer class="page-footer grey darken-3 personal_footer stats-card">   
    <!--<img src="/img/drawing.png"/>-->
    <div class="container">
        <div class="row grey-text">
            <div class="col l4 m4 s12 ">
                <h5>Categorias</h5>
                <ul class="themes">
                    <?php //foreach ($themes_nav as $key => $theme) : ?>
                        <li>
                            <?php //echo $this->Html->link($theme, array('plugin' => false, 'controller' => 'Themes', 'action' => 'view', $key), array('class' => 'grey-text text-darken-2')); ?>
                        </li>
                    <?php //endforeach; ?>
                </ul>
            </div>
            <div class="col m8 l8 s12">
                <div class="col l12 m12 s12">
                    <h5><?php //echo $sitename['Setting']['value'] . ' ' . CakeTime::format(time(), '%Y') ?></h5>
                    <p>Todos os Direito Reservado à Diocese de Santa Cruz em Corumbá.</p>
                </div>
                <div class="col m12 s12 l12 social_icons">
                    <h5>Redes Sociais</h5>
                    <?php //if (null != $twitter) : ?>
                        <a href="#!<?php //echo $twitter['Setting']['value']; ?>" target="_blank"><i class="fa fa-twitter fa-3x grey-text text-lighten-1" ></i></a>
                    <?php //endif; ?>
                    <?php //if (null != $facebook) : ?>
                        <a href="#!<?php //echo $facebook['Setting']['value']; ?>" target="_blank"><i class="fa fa-facebook fa-3x grey-text text-lighten-1" ></i></a>
                    <?php //endif; ?>
                    <?php //if (null != $google_plus) : ?>
                        <a href="#!<?php //echo $google_plus['Setting']['value']; ?>" target="_blank"><i class="fa fa-google-plus fa-3x grey-text text-lighten-1" ></i></a>
                    <?php //endif; ?>
                    <?php //if (null != $youtube) : ?>
                        <a href="#!<?php //echo $youtube['Setting']['value']; ?>" target="_blank"><i class="fa fa-youtube fa-3x grey-text text-lighten-1" ></i></a>
                    <?php //endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container white-text text-darken-1">
            <strong>Fábrica softwares - Univeridade Federal de Mato Grosso do Sul</strong>
        </div>
    </div>
</footer>