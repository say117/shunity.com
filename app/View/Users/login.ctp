<?php $this->assign('title_for_layout', 'ログイン'); ?>
<link rel="stylesheet" href="/css/form.css" />

<!-- [ Box ] -->
<section id="box">
  <!-- [ main ] -->
  <div id="main">
    <!-- [ ログイン ] -->
    <section id="common">
      <h2 class="">ログイン</h2>

      <div class="form signup">
        <?php echo $this->Form->create(); ?>
          <ul>
            <li>
              <p>
                <?php echo $this->Form->label('User.mail', 'メールアドレス'); ?>
                <?php echo $this->Form->text('User.mail', array('class' => 'form-control')); ?>
              </p>
            </li>
          </ul>
          <ul>
            <li>
              <p>
                <?php echo $this->Form->label('User.password', 'パスワード'); ?>
                <?php echo $this->Form->password('User.password', array('class' => 'form-control')); ?>
              </p>
            </li>
          </ul>
          <p class="center">
            <?php echo $this->Form->submit('ログイン', array('div' => false, 'class' => 'regist')); ?>
          </p>
          <p style="margin-left:20px;">
              <a href="/pages/beginners" style="color:#00AC97;">初めての方はこちら</a>
          </p>
      </div>
       
        
          

    </section>
