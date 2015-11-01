<?php 
    if($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view' && $page_info['title_url'] != 'login' && $page_info['title_url'] != 'cabinet' && $page_info['title_url'] != 'password' && $page_info['title_url'] != 'email' && $page_info['title_url'] != 'avatar') {?>

    <div class="right">
        <p class="latest_news">Архив новостей</p>
        <div class="right_categories">	
            <?php foreach($categories as $item): ?>
                <a href="<?=base_url();?>index.php/articles/cat/<?=$item['title_url'];?>"><?=$item['title'];?></a><br /> 
            <?php endforeach; ?>	
        </div>
    </div>
        <!---------Чтобы не выводилось на главной старнице-------------------------------------------------------------------->
        <?php if($page_info['title_url'] != 'home'){?>
            <div class="right">
                <p class="latest_news">Последние новости</p>
                <?php foreach($latest_articles as $item):?>
                    <div class="right_articles">
                        <a href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>"><img src="<?=base_url();?>images/articles/<?=$item['img']; ?>" alt="" title="" class="image" /></a><a class="title_latest_art" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>"><?=$item['title']; ?></a>
                        <p class="date_article">Дата: <?=$item['date']; ?></p>
                        <p><?= character_limiter($item['text'], 100); ?></p>
                        <p><a class="read_more" href="<?=base_url();?>index.php/article/view/<?php echo $item['title_url'];?>">Читать далее...</a></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php } ?>
<?php } ?>