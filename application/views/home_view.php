<div class="left">
    <p class="latest_news">Последние статьи</p>
    <?php foreach($latest_articles as $item):?>
        <div class="left_articles">
            <a class="title_article" href="<?=base_url();?>index.php/article/view/<?php echo $item['id'];?>"><?php echo $item['title'];?></a>
            <p class="date_article">Дата: <?php echo $item['date'];?></p>
            <a href="<?=base_url();?>index.php/article/view/<?php echo $item['id'];?>"><img src="<?=base_url();?>images/articles/<?php echo $item['img'];?>" alt="" /></a>
            <p><?= character_limiter($item['text'], 600); ?></p>
            <p><a class="read_more" href="<?=base_url();?>index.php/article/view/<?php echo $item['id'];?>">Читать далее...</a></p>
        </div>
    <?php endforeach; ?>
</div>