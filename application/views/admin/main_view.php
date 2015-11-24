<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Статистика сайта</h1><br /> 
    <table id="admin_statistic" class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Наименование</th>
            <th>Количество</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="<?= base_url();?>index.php/admin/editlist/articles">Статьи</a></td>
                <td><?= $stat['articles']; ?></td>
            </tr>
            <tr>
                <td><a href="<?= base_url();?>index.php/admin/userlist">Пользователи</a></td>
                <td><?= $stat['users']; ?></td>
            </tr>
            <tr>
                <td><a href="<?= base_url();?>index.php/admin/del/comments">Комментарии</a></td>
                <td><?= $stat['comments']; ?></td>
            </tr>
        </tbody>
    </table>
    
  </div>

    
</div><!-- /.container -->