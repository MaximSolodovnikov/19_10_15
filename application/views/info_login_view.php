<div class="error"><?=$error;?></div><br />
<form method="POST" action="<?=base_url();?>index.php/login">
    <label>Логин:</label><div class="error"><?=form_error('username');?></div>
    <input type="text" name="username" placeholder="Введите логин" value="<?=set_value('username');?>">
    <label>Пароль:</label><div class="error"><?=form_error('pswd');?></div>
    <input type="password" name="pswd" placeholder="Введите пароль" value="">
    <input type="submit" class="btn btn-info" name="autorization" value="Вход">
</form>