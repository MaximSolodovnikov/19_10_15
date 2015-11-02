<?php if($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view' && $page_info['title_url'] != 'login' && $page_info['title_url'] != 'cabinet' && $page_info['title_url'] != 'password' && $page_info['title_url'] != 'email' && $page_info['title_url'] != 'avatar' && $page_info['title_url'] != 'forgot_pswd') {?>
<div class="pagination">
     <?php echo $this->pagination->create_links(); ?>
</div>
<?php } ?>