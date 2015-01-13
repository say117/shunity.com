<?php $this->assign('title_for_layout', '会員登録'); ?>

<h2 class="pull-left">問題</h2>
<p><?php echo $question['Question']['description'] ?></p>
<br>

<h2 class="pull-left">解答</h2>
<?php echo $this->Form->create('Answer'); ?>
  <?php echo $this->Form->hidden('Answer.question_id', array('value' => $question['Question']['id'])); ?>
  <?php echo $this->Form->input('Answer.description', array('type' => 'textarea', 'label' => '内容')); ?>
  <?php echo $this->Form->submit('解答', array('class' => 'btn btn-block btn-primary')); ?>
<?php echo $this->Form->end(); ?>
