 <div class="header">
    <div class="top_info">
        <div class="top_info_right">
            <p>Do you want to <a href="#">Log in</a> or <a href="#">register</a>?</p>
            <div class="right_login">
                <form class="form-inline">
                    <input type="text" class="input-small" placeholder="Login">
                    <input type="password" class="input-small" placeholder="Password">
                    <input type="submit" class="btn btn-warning" name="login" value="Enter">
                </form>
            </div>
        </div>
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
            <p><a class="title" href="#" title="Мой сад и огород">Мой сад и огород</a><p/>
        </div>
    </div>
</div>