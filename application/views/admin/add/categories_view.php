<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Добавление категории</h1><br />
    <form method="POST" action="">
        <label>Название категории:</label><div class="error"><?= form_error('title'); ?></div>
        <input class="form-control" type="text" name="title" value="<?= set_value('title'); ?>"><br /><br />
        <label>Название категории (на английском):</label><div class="error"><?= form_error('title_url'); ?></div>
        <input class="form-control" type="text" name="title_url" value="<?= set_value('title_url'); ?>"><br /><br />
        <label>Ключевые слова:</label><div class="error"><?= form_error('keywords'); ?></div>
        <textarea class="form-control" rows="3" name="keywords"><?= set_value('keywords'); ?></textarea><br /><br />
        <input type="submit" class="btn btn-info" name="add" value="Добавить категорию">
    </form>
  </div>

</div><!-- /.container -->


