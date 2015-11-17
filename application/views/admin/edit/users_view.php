<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Страница пользователей</h1><br />
    <form method="POST" action="">
        <label>Логин:</label><div class="error"><?= form_error('username'); ?></div>
        <input class="form-control" type="text" name="username" value="<?= $info_about_data['username']; ?>"><br /><br />
        
        <label>Пароль:</label><div class="error"><?= form_error('password'); ?></div>
        <input class="form-control" type="text" name="password" value="<?= $info_about_data['password']; ?>"><br /><br />

        <label>Эл.почта:</label><div class="error"><?= form_error('email'); ?></div>
        <textarea class="form-control" rows="3" name="email"><?= $info_about_data['email']; ?></textarea><br /><br />
        
        <label>Аватар:</label><div class="error"><?= form_error('avatar'); ?></div>
        <textarea class="form-control" rows="3" name="avatar"><?= $info_about_data['avatar']; ?></textarea><br /><br />
        
        <input type="submit" class="btn btn-info" name="edit" value="Изменить пользователя">
    </form>
  </div>

</div><!-- /.container -->