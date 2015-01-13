<?php $this->assign('title_for_layout', '企業登録'); ?>

<!-- [ Box ] -->
<section id="box">
  <!-- [ main ] -->
  <div id="main">
    <!-- [ 会員登録 ] -->
    <section id="common">
      <h2 class="">企業登録</h2>

      <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger">
          <h3>入力エラー</h3>
          <ul>
            <?php foreach ($errors as $error) { ?>
              <li><?php echo $error[0]; ?></li>
            <?php } ?>
          </ul>
        </div>
      <?php } ?>
     
      <div class="form signup">
        <?php echo $this->Form->create(); ?>
          <ul>
            <li>
              <?php echo $this->Form->input('Company.name', array('label' => '企業名')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('Company.mail', array('label' => 'メールアドレス')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('Company.password', array('label' => 'パスワード')); ?>
            </li>
          </ul>
          <p class="center">
            <?php echo $this->Form->submit('会員登録', array('div' => false, 'class' => 'regist')); ?>
          </p>
        <?php echo $this->Form->end(); ?>
      </div>
         
    </section>
