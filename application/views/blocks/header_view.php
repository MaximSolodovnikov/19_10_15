 <div class="header">
    <div class="top_info">
        <?php if(($page_info['title_url'] != 'register')) {?>
            <div class="top_info_right">
                <p>Вы хотите <a href="#">Авторизоваться</a> или <a href="<?=base_url();?>index.php/login/register">Зарегистрироваться</a>?</p>
                <div class="right_login">
                    <form class="form-inline">
                        <input type="text" class="input-small" placeholder="Логин">
                        <input type="password" class="input-small" placeholder="Пароль">
                        <input type="submit" class="btn btn-warning" name="login" value="Вход">
                    </form>
                </div>
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