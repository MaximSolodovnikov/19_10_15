<?php if(($page_info['title_url'] == 'home')) {?>

<div class="myslider" id="slider" class="theme-default" >
    <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-1.jpg" alt="" />
    <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-2.jpg" alt="" />
    <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-3.jpg" alt="" />
</div> 
 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
<?php } ?>
