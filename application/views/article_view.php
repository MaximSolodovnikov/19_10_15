<div class="left">
    <div class="left_articles">
        <p class="title_particular_article" ><?php echo $page_info['title']; ?></p>
        <p class="date_article">Дата: <?php echo $page_info['date']; ?></p>
        <a href=""><img src="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" alt="" /></a>
        <p><?php echo $page_info['text']; ?></p>
    </div>
<!-------------------Комментарии--------------------->    
    <div class="left_articles">
        <p class="title_comment" >Комментарии</p>
        <form>
          <label>Автор</label>
          <input type="text" placeholder="Логин">
          <label>Комментарий</label>
          <textarea rows="5" placeholder="Поле для комментариев"></textarea><br />
          <input type="submit" class="btn btn-info" name="comment" value="Комментировать">
        </form>
    </div>
</div>