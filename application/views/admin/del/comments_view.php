<div id="admin_container" class="container">
    <h1>Комментарии </h1><br />        
    <table class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Автор</th>
            <th>Дата и время</th>
            <th>Комментарий</th>
            <th>Удалить или помиловать</th>
          </tr>
        </thead>
        <tbody>
           
            <?php foreach($edit as $item): ?>
        
        <form method="POST" action="">
            <tr>
                <td><?= $item['username']; ?></td>
                <td><?= $item['date']; ?> / <?= $item['time']; ?></td>
                <td><?= $item['comment']; ?></td>
               
                <th><input type="submit" name="del" value="Удалить" /></th>
                <input type="hidden" name="id" value="<?= $item['id']; ?>" />
            </tr>
        </form>
                
            <?php endforeach; ?>
        </tbody>
    </table>
</div>