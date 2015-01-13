<?php $this->assign('title_for_layout', 'オファー一覧'); ?>

<h2 class="pull-left">問題一覧</h2>

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>企業名</th>
      <th>メッセージ</th>
      <th>承諾</th>
      <th>拒否</th>
    </tr>
  </thead>
  <?php foreach ($offers as $offer) { ?>
    <tbody>
      <tr>
        <td><?php echo $offer['Offer']['id']; ?></td>
        <td><?php echo $offer['Company']['name']; ?></td>
        <td><?php echo $offer['Offer']['description']; ?></td>
        <td>
          <a href="/offers/accept/<?php echo $offer['Offer']['id']; ?>">
            <button class="btn btn-success">承諾</button>
          </a>
        </td>
        <td>
          <a href="/offers/reject/<?php echo $offer['Offer']['id']; ?>">
            <button class="btn btn-danger">拒否</button>
          </a>
        </td>
      </tr>
    </tbody>
  <?php } ?>
</table>

<ul class="pagination">
  <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
  <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
</ul>