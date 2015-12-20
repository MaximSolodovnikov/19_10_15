<div id="admin_container" class="container">
    <h1>Страница удаления <?= $info; ?> </h1><br />        
    <table class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Заголовок</th>
            <th>Удалить или помиловать</th>
          </tr>
        </thead>
        <tbody>
            
    <?php foreach($edit as $item): ?>
        
        <form method="POST" action="">
            <tr>
                <td><?= $item['title']; ?></td>
                <td><input type="submit" name="del" value="Удалить" /></td>
            </tr>
            <input type="hidden" name="id" value="<?= $item['id']; ?>" />
        </form>
                
    <?php endforeach; ?>
        </tbody>
    </table>
</div>