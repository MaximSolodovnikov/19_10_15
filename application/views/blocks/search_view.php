<?php if($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view' && $page_info['title_url'] != 'login' && $page_info['title_url'] != 'cabinet' && $page_info['title_url'] != 'password' && $page_info['title_url'] != 'email') {?>
<div class="search_field">
    <form class="form-search" method="POST" action="<?=base_url();?>index.php/search">
        <input type="text" name="search" placeholder="Поле для ввода" >
        <input type="submit" class="btn btn-success" name="search_btn" value="Поиск">
    </form>
</div>
<?php } ?>