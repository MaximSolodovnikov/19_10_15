<div class="left">
    <div class="left_articles">
        <p class="title_particular_article" ><?php echo $page_info['title']; ?></p>
        <p class="date_article">Дата: <?php echo $page_info['date']; ?></p>
        <a href=""><img src="<?=base_url();?>images/articles/<?php echo $page_info['img']; ?>" alt="" /></a>
        <p><?php echo $page_info['text']; ?></p>
    </div>
</div>