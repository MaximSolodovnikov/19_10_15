 <div class="header">
    <div class="top_info">
        <?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view')) {?>
        <br /><div class="top_info_right">
            <img class="avatar" src="<?=base_url();?>images/avatars/thumbs/<?=$user_info['avatar'];?>" alt="avatar">
            &nbsp;&nbsp;Здравствуйте, <span class="author_comment"><?=$user;?></span>    
            
            <p><br/>
                &nbsp;&nbsp;<a href="<?=base_url();?>index.php/login/logout">Выход</a>&nbsp;&nbsp; 
                <?php if($page_info['title_url'] != 'cabinet' ){?>| &nbsp;&nbsp; <a href="<?=base_url();?>index.php/cabinet">Дополнительно</a> <?php } ?>
            </p>
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
            </p>
            <a href="<?= base_url(); ?>"class="title_logo"><span class="title">Мой сайт</span><br /><span class="title_sub_logo">Codeigniter</span></a>
        </div>
    </div>
</div>