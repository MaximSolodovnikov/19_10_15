<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Редактирование категории</h1><br />
    <form method="POST" action="">
        <label>Название категории:</label><div class="error"><?= form_error('title'); ?></div>
        <input class="form-control" type="text" name="title" value="<?= $info_about_data['title']; ?>"><br /><br />
        <label>Название категории (на английском):</label><div class="error"><?= form_error('title_url'); ?></div>
        <input class="form-control" type="text" name="title_url" value="<?= $info_about_data['title_url']; ?>"><br /><br />
        <label>Ключевые слова:</label><div class="error"><?= form_error('keywords'); ?></div>
        <textarea class="form-control" rows="3" name="keywords"><?= $info_about_data['keywords']; ?></textarea><br /><br />
        <input type="submit" class="btn btn-info" name="edit" value="Редактировать категорию">
    </form>
  </div>

</div><!-- /.container -->


