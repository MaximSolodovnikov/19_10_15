<?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view')) {?>
<div class="search_field">
    <form class="form-search" method="POST" action="">
        <input type="text" name="search" placeholder="Поле для ввода">
        <input type="submit" class="btn btn-success" name="search" value="Поиск">
    </form>
</div>
<?php } ?>