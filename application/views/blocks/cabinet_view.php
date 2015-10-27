 <div class="header">
    <div class="top_info">
        <?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view')) {?>
        <br /><div class="top_info_right">
                <p><img src="<?= base_url();?>images/img/avatar.png">Здравствуйте, <?=$user;?></p>
            </div>
        <?php } ?>
        <div class="top_info_left">
            <p>Сегодня: <b>
			<?php 
			$months = array(
				"Jan" => "января",
				"Feb" => "февраля",
				"Mar" => "марта",
				"Apr" => "апреля",
				"May" => "мая",
				"Jun" => "июня",
				"Jul" => "июля",
				"Aug" => "августа",
				"Sep" => "сентября",
				"Oct" => "октября",
				"Nov" => "ноября",
				"Dec" => "декабря"
			);
			
			$month = date('M');

			echo date('d ' . $months[$month] . ' Y');?>
			
			</b>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" class="active">Русский</a>&nbsp;|&nbsp;<a href="">Украинский</a></p>
            <p><a class="title" href="<?=base_url();?>" title="Мой сад и огород">Мой сад и огород</a><p/>
        </div>
    </div>
</div>