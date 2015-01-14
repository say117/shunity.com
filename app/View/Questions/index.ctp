<?php $this->assign('title_for_layout', '問題一覧'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">問題一覧</h3>
  </div>
  <div class="panel-body">    
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>内容</th>
          <th>解答</th>
        </tr>
      </thead>
      <?php foreach ($questions as $question) { ?>
        <tbody>
          <tr>
            <td><?php echo $question['Question']['id']; ?></td>
            <td><?php echo $question['Question']['description']; ?></td>
            <td>
              <a href="/answers/add/<?php echo $question['Question']['id']; ?>">
                <button class="btn btn-success">解答</button>
              </a>
            </td>
          </tr>
        </tbody>
      <?php } ?>
    </table>
  </div>
</div>