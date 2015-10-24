<div class="left">
    <div class="left_articles">
        <p class="title_particular_article" ><?php echo $page_info['title']; ?></p>
        <p class="date_article">Дата: <?php echo $page_info['date']; ?></p>
        <img src="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" alt="" />
        <p><?php echo $page_info['text']; ?></p>
    </div>
<!-------------------Комментарии----------------------------------------------->  
<a name="c"></a>
    <div class="left_articles">
        <p class="title_comment" >Комментарии</p>
        
<!-------------------Вывод комментариев---------------------------------------->        
    <?php foreach($comments as $item): ?>
        <div class="left_articles">
            <p class="author_comment" ><?=$item['author'];?></p>
            <img src="<?=base_url();?>images/img/<?=$item['avatar'];?>" alt="" class="image"/>
            <div class="line"></div>
            <p><?=$item['comment'];?></p>
            <div class="line"></div>
            <p class="date_article">Дата: <?=$item['date'];?>&nbsp;&nbsp; |&nbsp;&nbsp; Время: <?=$item['time'];?></p>
        </div>
    <?php endforeach; ?>
<a name="f"></a>
<!----------------------------------------------------------------------------->   

        <form method="POST" action="<?=base_url();?>index.php/article/view/<?php echo $page_info['title_url']; ?>#f">
            <label>Автор</label><div class="error"><?=form_error('author');?></div>
            <input type="text" name="author" placeholder="Логин" value="<?=set_value('author');?>">
            <input type="hidden" name="avatar" value="avatar.png">
            <input type="hidden" name="title_url" value="<?php echo $page_info['title_url']; ?>">
            <input type="hidden" name="category" value="<?php echo $page_info['category']; ?>">
            <label>Комментарий</label><div class="error"><?=form_error('comment_text');?></div>
            <textarea rows="5" name="comment_text" placeholder="Поле для комментариев"><?=set_value('comment_text');?></textarea><br />
            <label>Введите символы с картинки</label><div class="error"></div>
            <input type="text" name="captcha" >&nbsp;&nbsp;<input type="text" name="captcha2" ><br />
            <input type="submit" class="btn btn-info" name="add_comment" value="Комментировать">
        </form>
    </div>
</div>