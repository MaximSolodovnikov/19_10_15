<div class="left">
    <?php foreach($articles as $item):?>
        <div class="left_articles">
            <a class="title_article" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>"><?php echo $item['title'];?></a>
            <p class="date_article">Date: <?php echo $item['date'];?></p>
            <a href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>"><img src="<?=base_url();?>images/articles/<?php echo $item['img'];?>" alt="" /></a>
            <p><?= character_limiter($item['text'], 500); ?></p>
            <p><a class="read_more" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>">Читать далее...</a></p>
        </div>
    <?php endforeach; ?>
</div>