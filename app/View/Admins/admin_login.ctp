<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Admin',array('inputDefaults' => array('label' => false,'div' => false),'type'=>'POST','action'=>'admin_login')); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
<?php echo $this->Html->link('For users top', '/'); ?>
</div>