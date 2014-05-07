<?php
	$this->assign('description', 'Log in');
?>
 
 
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('class' => 'form-horizontal'));?>
 
  <div class="form-group"> 
    <label for="UserUsername" class="col-sm-2 control-label"><?php echo __('Username'); ?></label>
    <?php echo $this->Form->input('username', array(
      	'label' => false,
      	'class' => 'form-control',
      	'div' => array('class' => 'col-sm-10')
    )); ?>
  </div>
 
  <div class="form-group"> 
    <label for="UserPassword" class="col-sm-2 control-label"><?php echo __('Password'); ?></label>
    <?php echo $this->Form->input('password', array(
      	'label' => false,
      	'class' => 'form-control',
      	'div' => array('class' => 'col-sm-10')
    )); ?>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?= $this->Form->submit(__('Log in'), array('class' => 'btn btn-success')); ?>
    </div>
  </div>
<?= $this->Form->end();?>