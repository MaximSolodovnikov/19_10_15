<div class="error"><?php echo $error;?></div><br />
<form method="POST" action="<?=base_url();?>index.php/login/forgot_pswd">
    <label>Логин:</label><div class="error"><?=form_error('login');?></div>
    <input type="text" name="login" placeholder="Введите логин" value="<?=set_value('login');?>">
    <label>E-mail:</label><div class="error"><?=form_error('email');?></div>
    <input type="text" name="email" placeholder="Введите адрес эл.почты" value="<?=set_value('email');?>"><br />
    <input type="submit" class="btn btn-info" name="send_pswd" value="Отправить">
</form>