<div class="bar">
    <ul>
		<?php foreach($menu as $item): ?>
			<li><a href="<?=base_url();?>index.php/pages/page/<?=$item['title_url']; ?>" accesskey="" <?php /*if($item['title_url'] == $name) echo "class = active";*/?>><?=$item['title']; ?></a></li>
		<?php endforeach; ?>
    </ul>
</div>