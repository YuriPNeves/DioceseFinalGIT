<?php //echo $this->element('welcome')?>
<?php $is_admin = isset($user['role']) && $user['role'] === 'admin'? TRUE : FALSE ?>

<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header <?php //echo ('Posts' == $active) ? 'active' : '' ?>">
          <i class="material-icons">perm_identity</i>Usuários</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/users" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
              <a href="/DioceseFinal/users/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header <?php //echo ('Contents' == $active) ? 'active' : '' ?>">
          <i class="material-icons">insert_drive_file</i>Transações</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/transacaos" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header <?php //echo ('Advertisements' == $active) ? 'active' : '' ?>"><i class="material-icons">view_list</i>Notícias</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/noticias" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
              <a href="/DioceseFinal/noticias/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header <?php //echo ('Comments' == $active) ? 'active' : '' ?>"><i class="material-icons">question_answer</i>Movimentos</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/movimentos" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
			  <a href="/DioceseFinal/movimentos/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header <?php //echo ('Themes' == $active) ? 'active' : '' ?>">
          <i class="material-icons">description</i>Cursos</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/cursos" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
              <a href="/DioceseFinal/cursos/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
	<li>
      <div class="collapsible-header <?php //echo ('SiteSettings' == $active) ? 'active' : '' ?>">
          <i class="material-icons">supervisor_account</i>Comunidades</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/comunidades" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
			  <a href="/DioceseFinal/comunidades/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header <?php //echo ('Users' == $active) ? 'active' : '' ?>">
          <i class="material-icons">face</i>Cleros</div>
      <div class="collapsible-body">
          <div class="collection">
              <a href="/DioceseFinal/cleros" class="collection-item">
                <div><i class="material-icons left">list</i>Listar</div>
              </a>
              <a href="/DioceseFinal/cleros/add" class="collection-item">
                <div><i class="material-icons left">note_add</i>Novo</div>
              </a>
          </div>
      </div>
    </li>
    <?php if($is_admin) :?>
    
    <?php endif;?>
  </ul>