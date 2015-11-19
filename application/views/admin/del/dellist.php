<div id="admin_container" class="container">
    <h1>Страница удаления <?= $info; ?> </h1><br />        
    <table class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Название</th>
            <th>Дата и время</th>
            <th>Удалить или помиловать</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($edit as $item): ?>
        
        <form method="POST" action="">
            <tr>
                <td><?= $item['title']; ?></td>
                <td><?= $item['date']; ?> / <?= $item['time']; ?></td>
               
                <th><input type="submit" name="del" value="Удалить" /></th>
                <input type="hidden" name="id" value="<?= $item['id']; ?>" />
            </tr>
        </form>
                
            <?php endforeach; ?>
        </tbody>
    </table>
</div>