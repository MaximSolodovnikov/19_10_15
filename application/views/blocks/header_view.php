 <div class="header">
    <div class="top_info">
        <?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view' && $page_info['title_url'] != 'login')) {?>
            <div class="top_info_right">
                Желаете&nbsp;&nbsp;<a href="<?=base_url();?>index.php/login/register">Зарегистрироваться</a>?
                <div class="right_login">
                    <form class="form-inline" method="POST" action="<?=base_url();?>index.php/login">
                        <input type="text" class="input-small" name="username" placeholder="Логин" value="">
                        <input type="password" class="input-small" name="pswd" placeholder="Пароль">
                        <input type="submit" class="btn btn-warning" name="enter" value="Вход">
                    </form>
                </div>
                <a href="<?=base_url();?>index.php/login/forgot_pswd">Забыли пароль</a>?
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
            <p><span class="title">Катя Катерина - </span><br /><span class="title_sub_logo">нарисована картина</span><p/>
        </div>
    </div>
</div>