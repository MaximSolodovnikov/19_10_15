<div class="left">
    <div class="search">
        
        <?php if($this->input->post('search_btn') && !$this->input->post('search')) {
            
                    echo "<div class='error'>&nbsp;&nbsp;По Вашему запросу ничего не найдено</div>";
        }else {?>
            <p class="search_result">Результат поиска:</p>
            <div class="left_articles">
             <?php foreach ($search as $item): ?>
                <a class="search_title" href="<?=base_url();?>index.php/article/view/<?php echo $item->id;?>"><?php echo '<ul><li><strong>' . $item->title . '</strong></li></ul>'; ?><?php echo "<br /> <p class='search_text'>" . character_limiter($item->text, 200) . '</p><br/>'; ?></a>
             <?php endforeach; } ?>
            </div>
    </div>
</div>
