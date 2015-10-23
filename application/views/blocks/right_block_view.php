<div class="right">
    <p class="latest_news">Архив новостей</p>
    <div class="right_categories">	
        <?php foreach($categories as $item): ?>
            <a href="<?=base_url();?>index.php/articles/cat/<?=$item['title_url'];?>"><?=$item['title'];?></a><br /> 
        <?php endforeach; ?>	
    </div>
</div>
<!----------------------------------------------------------------------------->
<div class="right">
    <p class="latest_news">Последние новости</p>
    <?php foreach($latest_articles as $item):?>
        <div class="right_articles">
            <a href=""><img src="<?=base_url();?>images/articles/<?=$item['img']; ?>" alt="" title="" class="image" /></a><a class="title_latest_art" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>"><?=$item['title']; ?></a>
            <p class="date_article">Дата: <?=$item['date']; ?></p>
            <p><?=$item['text']; ?></p>
            <p><a class="read_more" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>">Читать далее...</a></p>
        </div>
    <?php endforeach; ?>
</div>