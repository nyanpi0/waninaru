<h2>ユーザ新規登録入力画面</h2>
<div>
	<?php echo $this->Html->link('ユーザ検索一覧' , array('controller'=>'users' , 'action'=>'admin_index') ) ?>
	<?php echo $this->Html->link('ユーザ新規登録' , array('controller'=>'users' , 'action'=>'admin_userRegist') ) ?>
</div>
<?php echo $this->Form->create('Post'); ?>
	<?php echo $this->Form->input('User.student_number', array('type' => 'text','label' => '学籍番号')); ?>
	<?php echo $this->Form->input('User.real_name', array('type' => 'text','label' => '本名')); ?>
	<?php echo $this->Form->input('User.user_name', array('type' => 'text','label' => 'ユーザ名')); ?>
	<?php echo $this->Form->input('User.user_password', array('type' => 'password','label' => 'パスワード')); ?>
<?php echo $this->Form->end('登録'); ?>