<?php if($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view' && $page_info['title_url'] != 'login' && $page_info['title_url'] != 'cabinet' && $page_info['title_url'] != 'password' && $page_info['title_url'] != 'email' && $page_info['title_url'] != 'avatar' && $page_info['title_url'] != 'forgot_pswd') {?>
<div class="bar">
    <ul>
        <li><a href="<?=base_url();?>" <?php if($page_info['title_url'] == 'home') echo "class = 'active'";?> accesskey="">Главная</a></li>
        <li><a href="<?=base_url();?>index.php/articles" <?php if($page_info['title_url'] == 'articles') echo "class = 'active'";?>accesskey="">Статьи</a></li>
        <li><a href="<?=base_url();?>index.php/gallery" <?php if($page_info['title_url'] == 'gallery') echo "class = 'active'";?>accesskey="">Галерея</a></li>
        <li><a href="<?=base_url();?>index.php/contacts" <?php if($page_info['title_url'] == 'contacts') echo "class = 'active'";?>accesskey="">Контакты</a></li>
    </ul>
</div>
<?php } ?>