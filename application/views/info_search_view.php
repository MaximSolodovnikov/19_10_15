<div class="left">
    <div class="search">
        
        <?php if($this->input->post('search_btn') && !$this->input->post('search')) {
            
                    echo "<div class='error'>&nbsp;&nbsp;По Вашему запросу ничего не найдено</div>";
        }else {?>
            <p class="search_result">Результат поиска:</p>
             <?php foreach ($search as $item): ?>
            <p>&nbsp;&nbsp; Статья: <a class="search_title" href="<?=base_url();?>index.php/article/view/<?php echo $item->title_url;?>"><?php echo $item->title; ?></a></p>
        <?php endforeach;
        } ?>
        
    </div>
</div>
