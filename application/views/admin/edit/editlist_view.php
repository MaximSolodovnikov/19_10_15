<div id="admin_container" class="container">
    <h1>Страница редактирования <?= $info; ?> </h1><br />        
    <table class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Id</th>
            <th>Заголовок</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($edit as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><a href="<?= base_url(); ?>index.php/admin/edit/<?= $page; ?>/<?= $item['id'] ;?>"><?= $item['title']; ?></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>