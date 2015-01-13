<?php $this->assign('title_for_layout', '企業ログイン'); ?>

    <section id="common">
      <h2 class="">ログイン</h2>

      <div class="form signup">
        <?php echo $this->Form->create(); ?>
          <ul>
            <li>
              <p>
                <?php echo $this->Form->label('Company.mail', 'メールアドレス'); ?>
                <?php echo $this->Form->text('Company.mail', array('class' => 'form-control')); ?>
              </p>
            </li>
          </ul>
          <ul>
            <li>
              <p>
                <?php echo $this->Form->label('Company.password', 'パスワード'); ?>
                <?php echo $this->Form->password('Company.password', array('class' => 'form-control')); ?>
              </p>
            </li>
          </ul>
          <p class="center">
            <?php echo $this->Form->submit('ログイン', array('div' => false, 'class' => 'regist')); ?>
          </p>
      </div>
       
        
          

    </section>
