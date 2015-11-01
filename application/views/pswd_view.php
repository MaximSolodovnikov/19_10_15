<div class="error"><?=$error;?></div><br />
<form method="POST" action="<?=base_url();?>index.php/cabinet/password">
    <label>Старый пароль:</label><div class="error"><?=form_error('old_pswd');?></div>
    <input type="password" name="old_pswd" placeholder="Введите старый пароль" value="<?=set_value('old_pswd');?>">
    <label>Новый пароль:</label><div class="error"><?=form_error('new_pswd');?></div>
    <input type="password" name="new_pswd" placeholder="Введите новый пароль" value=""><br />
    <label>Новый пароль (повторно):</label><div class="error"><?=form_error('new_pswd2');?></div>
    <input type="password" name="new_pswd2" placeholder="Введите пароль (повторно)" value=""><br />
    <input type="submit" class="btn btn-info" name="change_pswd" value="Изменить">
</form>