<div class="left">
    <?php foreach($articles as $item):?>
        <div class="left_articles">
            <a class="title_article" href="#"><?php echo $item['title'];?></a>
            <p class="date_article">Date: <?php echo $item['date'];?></p>
            <a href=""><img src="<?=base_url();?>images/articles/<?php echo $item['img'];?>" alt="" /></a>
            <p><?php echo $item['text'];?></p>
            <p><a class="read_more" href="#">Read more...</a></p>
        </div>
    <?php endforeach; ?>
</div>