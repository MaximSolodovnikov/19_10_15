<div id="admin_container" class="container">
    <h1>Список всех пользователей</h1><br />        
    <table class="table table-hover table-condensed table-bordered">
        <caption></caption>
        <thead>
          <tr class="info">
            <th>Имя</th>
            <th>Аватар</th>
            <th>Эл.почта</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($user_info as $item): ?>
                <tr>
                    <td><a href="<?= base_url(); ?>index.php/admin/edit/users/<?= $item['id']; ?>"><?= $item['username']; ?></a></td>
                    <td><img src="<?= base_url();?>images/avatars/thumbs/<?= $item['avatar']; ?>" alt="avatar" /></td>
                    <td><?= $item['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>