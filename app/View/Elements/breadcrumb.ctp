 <nav>
     <div class="nav-wrapper <?php echo isset($user['color']) ? $user['color'] : 'teal' ?> hoverable center-align">
      <div class="col s12 l12 m12">
        <?php echo $this->Html->getCrumbs('', 'Home'); ?>
      </div>
    </div>
  </nav>
    
