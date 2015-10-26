<?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view')) {?>
<div class="pagination">
     <?php echo $this->pagination->create_links(); ?>
</div>
<?php } ?>