<?php $this->assign('title_for_layout', '会員登録'); ?>
<link rel="stylesheet" href="/css/form.css" />

<!-- [ Box ] -->
<section id="box">
  <!-- [ main ] -->
  <div id="main">
    <!-- [ 会員登録 ] -->
    <section id="common">
      <h2 class="">会員登録</h2>

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
              <?php echo $this->Form->input('User.first_name', array('label' => '苗字')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('User.last_name', array('label' => '名前')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('User.mail', array('label' => 'メールアドレス')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('User.password', array('label' => 'パスワード')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('User.tel', array('label' => '電話番号')); ?>
            </li>
            <li>
              <?php echo $this->Form->input('User.university', array('label' => '大学')); ?>
            </li>
          </ul>
          <p class="center">
            <?php echo $this->Form->submit('会員登録', array('div' => false, 'class' => 'regist')); ?>
            <p style="text-align:center;color:#848484;font-size:12px;">登録すると、<u>利用規約</u>および<a href="../pages/sitepolicy"><u>プライバシーポリシー</u></a>に同意したことになります。</p>
          </p>
        <?php echo $this->Form->end(); ?>
      </div>
         
    </section>
