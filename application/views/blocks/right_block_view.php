<div class="right">
    <p class="latest_news">Архив новостей</p>
    <div class="right_categories">
		
        <?php foreach($categories as $item): ?>
                <a href="<?=base_url();?>index.php/articles/cat/<?=$item['title_url'];?>"><?=$item['title'];?></a><br /> 
        <?php endforeach; ?>
		
    </div>
</div>
<div class="right">
    <p class="latest_news">Последние новости</p>
    <div class="right_articles">
        <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_1.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum dolor sit amet</b><br /> 
        <p class="date_article">Date: 03.10.2015</p>
        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
        <p><a class="read_more" href="#">Read more...</a></p>
    </div>
    <div class="right_articles">
        <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_2.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum dolor sit</b><br /> 
        <p class="date_article">Date: 06.09.2015</p>
        <p>Amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
        <p><a class="read_more" href="#">Read more...</a></p>
    </div>
    <div class="right_articles">
        <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_3.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum</b><br /> 
        <p class="date_article">Date: 11.09.2015</p>
        <p>Dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
        <p><a class="read_more" href="#">Read more...</a></p>
    </div>
</div>