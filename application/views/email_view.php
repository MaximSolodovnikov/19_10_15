<div class="error"><?=$error;?></div><br />
<form method="POST" action="<?=base_url();?>index.php/cabinet/email">
    <label>Старый адрес эл.почты:</label><div class="error"><?=form_error('old_email');?></div>
    <input type="text" name="old_email" placeholder="Введите старый адрес эл.почты" value="<?=set_value('old_email');?>">
    <label>Новый адрес эл.почты:</label><div class="error"><?=form_error('new_pswd');?></div>
    <input type="text" name="new_email" placeholder="Введите новый адрес эл.почты" value=""><br />
    <input type="submit" class="btn btn-info" name="change_email" value="Изменить">
</form>