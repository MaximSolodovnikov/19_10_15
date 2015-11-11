<div class="error"><?=$error;?></div><br />

<form method="POST" action="<?=base_url();?>index.php/login/register" enctype="multipart/form-data">
    <label>Выберете себя аватар</label><div class="error"><?=form_error('avatar');?></div>
    <input class="input_file" type="file" name="avatar">
    <label>Логин:</label><div class="error"><?=form_error('username');?></div>
    <input type="text" name="username" placeholder="Введите логин" value="<?=set_value('username');?>">
    <label>Пароль:</label><div class="error"><?=form_error('pswd');?></div>
    <input type="password" name="pswd" placeholder="Введите пароль" value="">
    <label>Пароль(повторно):</label><div class="error"><?=form_error('pswd2');?></div>
    <input type="password" name="pswd2" placeholder="Введите пороль повторно" value="">
    <label>E-mail:</label><div class="error"><?=form_error('email');?></div>
    <input type="text" name="email" placeholder="Введите адрес эл.почты" value="<?=set_value('email');?>">
    <label>Введите символы с картинки:</label><div class="error"><?=form_error('captcha');?></div>
    <div class="captcha"><?=$captcha;?></div>&nbsp;&nbsp;<input class="input-small" type="text" name="captcha" ><br /><br />
    <input type="submit" class="btn btn-info" name="register" value="Регистрация">
</form>