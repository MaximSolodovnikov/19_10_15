<div class="error"><?=$error;?></div><br />

&nbsp;&nbsp;<img class="avatar" src="<?=base_url();?>images/avatars/thumbs/<?= $user_info['avatar'];?>" width="86" height="86" alt="Avatar">

<form method="POST" action="<?=base_url();?>index.php/cabinet/avatar" enctype="multipart/form-data">
    <input style="padding-left: 10px;" type="file" name="avatar"><br /><br /><br /><br /><br />
    <input type="submit" class="btn btn-info" name="change_avatar" value="Изменить">
</form>