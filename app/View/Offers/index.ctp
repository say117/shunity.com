<?php $this->assign('title_for_layout', 'オファー一覧'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">オファー一覧</h3>
  </div>
  <div class="panel-body">    
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
  </div>
</div>