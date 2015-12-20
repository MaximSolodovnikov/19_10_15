<div class="error"><?=$error;?></div><br />

&nbsp;&nbsp;<br /><img style="width:48px;" src="<?=base_url();?>images/avatars/thumbs/<?= $user_info['avatar'];?>" width="86" height="86" alt="Avatar">


<form method="POST" action="<?=base_url();?>index.php/cabinet/avatar" enctype="multipart/form-data">
    <input class="input_file_avatar" type="file" name="avatar"><br /><br />
    <input type="submit" class="btn btn-info" name="change_avatar" value="Изменить">
</form>