<div class="left">
    <div class="left_articles">
        <p class="title_particular_article" ><?php echo $page_info['title']; ?></p>
        <p class="date_article">Дата: <?php echo $page_info['date']; ?></p>
        <a href="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" data-lightbox="image"><img src="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" alt="" /></a>
        <p><?php echo $page_info['text']; ?></p>
    </div>
    <script src="<?=base_url();?>js/lightbox.js"></script>
<!-------------------Комментарии----------------------------------------------->  
<a name="c"></a>
    <div class="left_articles">
        <p class="title_comment" >Комментарии</p>

    <?php if($user) {?>
            
<!-------------------Вывод комментариев---------------------------------------->        
    <?php foreach($comments as $item): ?>
        <div class="left_articles">
            <p class="author_comment" ><?php echo $item['author']; ?></p>
            <img src="<?=base_url();?>images/avatars/thumbs/<?=$item['avatar'];?>" alt="" class="image"/>
            <div class="line"></div>
            <p><?=$item['comment'];?></p>
            <div class="line"></div>
            <p class="date_article">Дата: <?=$item['date'];?>&nbsp;&nbsp; |&nbsp;&nbsp; Время: <?=$item['time'];?></p>
        </div>
    <?php endforeach; ?>

<a name="f"></a>
        <form method="POST" action="<?=base_url();?>index.php/article/view/<?php echo $page_info['title_url']; ?>#f">
            <label>Автор: <?= $user;?> </label><div class="error"><?=form_error('author');?></div>
            <input type="hidden" name="author" value="">
            <input type="hidden" name="avatar" value="<?= $user_info['avatar']; ?>">
            <input type="hidden" name="title_url" value="<?php echo $page_info['title_url']; ?>">
            <input type="hidden" name="category" value="<?php echo $page_info['category']; ?>">
            <label>Комментарий</label><div class="error"><?=form_error('comment_text');?></div>
            <textarea rows="5" name="comment_text" placeholder="Поле для комментариев"><?=set_value('comment_text');?></textarea><br />
            <label>Введите символы с картинки</label><div class="error"><?=form_error('captcha');?><?=$error;?></div>
            <div class="captcha"><?=$captcha;?></div>&nbsp;&nbsp;<input class="input-small" type="text" name="captcha" ><br /><br />
            <input type="submit" class="btn btn-info" name="add_comment" value="Комментировать">
        </form>

<!----------------------------------------------------------------------------->   
    
    <?php } 
        else { ?>
            <div class="without_login">
                <div class="error"><?="Для того, чтобы оставлять комментарии, Вам необходимо авторизироваться";?></div>
            </div>
        <?php } ?>

    </div>
</div>


        

