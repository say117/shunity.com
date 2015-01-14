<?php $this->assign('title_for_layout', 'TOP'); ?>


<img class="bg" src="/images/user_top.jpg" alt="" />
<div id="container">

<img width='60' height='60' src="/images/logo.png" class="pull-left" style="margin-right: 5px;">
  <h1 style="color:#fff;" class="pull-left">Shunity</h1>


<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-3">


            <div class="form-login">
        <?php echo $this->Form->create('User', array('action' => 'login')); ?>
            <h4>Please sign in.</h4>
                <?php echo $this->Form->text('User.mail', array('class' => 'form-control', 'label' => false, 'placeholder' => "username")); ?>
            </br>
                <?php echo $this->Form->password('User.password', array('class' => 'form-control', 'label' => false, 'placeholder' => "password")); ?>
            </br>
            <div class="wrapper">
            <span class="group-btn"> 

          <p class="center">
            <?php echo $this->Form->submit('Sign in', array('div' => false, 'class' => 'btn btn-primary btn-md')); ?>
          </p>    
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>

</div>