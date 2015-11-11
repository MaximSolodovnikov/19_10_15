<?php if($user) { ?>

    <div class="success"><?=$error;?></div>
    <a href="<?= base_url();?>index.php/cabinet/password">Изменить пароль</a><br/>
    <a href="<?= base_url();?>index.php/cabinet/email">Изменить электронный адрес</a><br/>
    <a href="<?= base_url();?>index.php/cabinet/avatar">Изменить аватар</a><br/>

<?php } else {?>

    <div class="error"><?=$error;?></div>
    
<?php } ?>