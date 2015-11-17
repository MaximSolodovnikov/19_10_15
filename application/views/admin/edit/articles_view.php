<div id="admin_container" class="container">

  <div class="starter-template">
    <h1>Редактирование статьи</h1><br />
    <form method="POST" action="">
        <label>Название статьи:</label><div class="error"><?= form_error('title'); ?></div>
        <input class="form-control" type="text" name="title" value="<?= $info_about_data['title']; ?>"><br /><br />
        
        <label>id статьи:</label><div class="error"><?= form_error('id'); ?></div>
        <input class="form-control" type="text" name="id" value="<?= $info_about_data['id']; ?>"><br /><br />
        
        <input type="hidden" name="date" value="<?= date('Y-m-d'); ?>" />
        
        <label>Текст статьи:</label><div class="error"><?= form_error('text'); ?></div>
        <textarea class="form-control" rows="3" name="text"><?= $info_about_data['text']; ?></textarea><br /><br />
        
        <label>Ключевые слова:</label><div class="error"><?= form_error('keywords'); ?></div>
        <textarea class="form-control" rows="3" name="keywords"><?= $info_about_data['keywords']; ?></textarea><br /><br />
        
        <label>Категория статьи:</label><div class="error"><?= form_error('category'); ?></div>
        
        <select class="form-control" name="category">
            <option><?= $info_about_data['category']; /* for active item of tag  */?></option> 
            <?php foreach($categories as $item): ?>
                <option value="<?php $item['title_url']; ?>"><?= $item['title']; ?></option>
            <?php endforeach; ?>
        </select><br /><br />
        
        <input type="submit" class="btn btn-info" name="edit" value="Редактировать статью">
    </form>
  </div>

</div><!-- /.container -->