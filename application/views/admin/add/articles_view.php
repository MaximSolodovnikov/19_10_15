<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Добавление статьи</h1><br />
    <form method="POST" action="">
        <label>Название статьи:</label><div class="error"><?= form_error('title'); ?></div>
        <input class="form-control" type="text" name="title" value="<?= set_value('title'); ?>"><br /><br />
        
        <label>id статьи:</label><div class="error"><?= form_error('id'); ?></div>
        <input class="form-control" type="text" name="id" value="<?= set_value('id'); ?>"><br /><br />
        
        <input type="hidden" name="date" value="<?= date('Y-m-d'); ?>" />
        
        <label>Текст статьи:</label><div class="error"><?= form_error('text'); ?></div>
        <textarea class="form-control" rows="3" name="text"><?= set_value('text'); ?></textarea><br /><br />
        
        <label>Ключевые слова:</label><div class="error"><?= form_error('keywords'); ?></div>
        <textarea class="form-control" rows="3" name="keywords"><?= set_value('keywords'); ?></textarea><br /><br />
        
        <label>Категория статьи:</label><div class="error"><?= form_error('category'); ?></div>
        <select class="form-control" name="category">
            <?php foreach($categories as $item): ?>
                <option value="<?= $item['title_url']; ?>"><?= $item['title']; ?></option>
            <?php endforeach; ?>
        </select><br /><br />
        
        <input type="submit" class="btn btn-info" name="add" value="Добавить статью">
    </form>
  </div>

</div><!-- /.container -->


