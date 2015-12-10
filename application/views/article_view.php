<div class="left">
    <div class="left_articles">
        <!-------------------Output of specific article----------------------->
        <p class="title_particular_article" ><?php echo $page_info['title']; ?></p>
        <p class="date_article">Дата: <?php echo $page_info['date']; ?></p>
        <a href="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" data-lightbox="image"><img src="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" alt="" /></a>
        <p><?php echo $page_info['text']; ?></p>
    </div>
    <script src="<?=base_url();?>js/lightbox.js"></script>
<!-------------------Comments------------------------------------------------->  
<a name="c"></a>
    <div class="left_articles">
        <p class="title_comment" >Комментарии</p>
    <?php if($user) {?>
            
<!-------------------Output of comments--------------------------------------->        

    <?php foreach($comments as $item): ?>
        <div class="left_articles">
            <span class="author_comment"><?=$item['username'];?></span>
            <div class="line"></div>
            <img class="avatar" src="<?=base_url();?>images/avatars/thumbs/<?=$item['avatar'];?>" alt="avatar">
            <p><?=$item['comment'];?></p>
            <div class="line"></div>
            <p class="date_article">Дата: <?=$item['date'];?>&nbsp;&nbsp; |&nbsp;&nbsp; Время: <?=$item['time'];?></p>
        </div>
    <?php endforeach; ?>

<a name="f"></a>
    <p class="author_comment" ><?php echo $user; ?></p>
        <form method="POST" action="<?=base_url();?>index.php/article/view/<?php echo $page_info['title_url']; ?>#f">
<!--            <input type="hidden" name="author" value="<?php echo $user; ?>">-->
<!--            <input type="hidden" name="avatar" value="<?= $user_info['avatar']; ?>">-->
            <input type="hidden" name="article_id" value="<?php echo $page_info['id']; ?>">
            <input type="hidden" name="title_url" value="<?php echo $page_info['title_url']; ?>">
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
                <div class="error"><?="Для того, чтобы оставлять комментарии, <br />Вам необходимо авторизироваться";?></div>
            </div>
        <?php } ?>
    </div>
</div>