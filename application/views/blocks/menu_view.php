<div class="bar">
    <ul>
		<?php foreach($menu as $item): ?>
			<li><a href="<?=base_url();?>index.php/pages/page/<?=$item['title_url']; ?>" accesskey=""><?=$item['title']; ?></a></li>
		<?php endforeach; ?>
    </ul>
</div>