<?php $this->assign('title_for_layout', '会員登録'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">問題に答える</h3>
  </div>
  <div class="panel-body">
	<label for="QuestionDescription">問題</label>
	<p><?php echo $question['Question']['description'] ?></p>
    <div class="form-group">
	    <?php echo $this->Form->create('Answer'); ?>
		  <?php echo $this->Form->hidden('Answer.question_id', array('value' => $question['Question']['id'])); ?>
		  <label for="QuestionDescription">解答</label>
		  <?php echo $this->Form->input('Answer.description', array('type' => 'textarea', 'label' => false, 'class' => 'form-control')); ?>
    </div>
	<?php echo $this->Form->submit('解答', array('class' => 'btn btn-block btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
  </div>
</div>