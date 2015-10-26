<div class="footer">
    <?php if(($page_info['title_url'] != 'register' && $page_info['title_url'] != 'info_login_view')) {?>
            <p>
                <a href="<?=base_url();?>" <?php if($page_info['title_url'] == 'home') echo "class = 'active2'";?>>Главная</a> | 
                <a href="<?=base_url();?>index.php/articles" <?php if($page_info['title_url'] == 'articles') echo "class = 'active2'";?>accesskey="">Статьи</a>  | 
                <a href="<?=base_url();?>index.php/gallery" <?php if($page_info['title_url'] == 'gallery') echo "class = 'active2'";?>accesskey="">Галерея</a> | 
                <a href="<?=base_url();?>index.php/contacts" <?php if($page_info['title_url'] == 'contacts') echo "class = 'active2'";?>accesskey="">Контакты</a> <br />
    <?php } ?>
                &copy; 2015 <b>Мой сад и огород.</b> Дизайн и разработка: Солодовников М.В.</p>
            </div>
	</div>
    </body>
</html>