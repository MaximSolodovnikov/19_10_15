<div class="error"><?=$error;?></div><br />
<form method="POST" action="<?=base_url();?>index.php/cabinet/email">
    <label>Старый (email):</label><div class="error"><?=form_error('old_email');?></div>
    <input type="text" name="old_email" placeholder="Введите старый (email)" value="<?=set_value('old_email');?>">
    <label>Новый (email):</label><div class="error"><?=form_error('new_email');?></div>
    <input type="text" name="new_email" placeholder="Введите новый (email)" value="<?=set_value('new_email');?>"><br />
    <input type="submit" class="btn btn-info" name="change_email" value="Изменить">
</form>