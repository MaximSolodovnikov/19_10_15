<?php if(($page_info['title_url'] == 'home')) {?>
    <div class="myslider" id="slider" class="theme-default" >
        <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-1.jpg" alt="" />
        <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-2.jpg" alt="" />
        <img src="<?=base_url();?>images/slider/abstract-q-c-970-200-3.jpg" alt="" />
    </div> 
<script type="text/javascript">
   $(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade', // Выберите эффекты: 'fold,fade,sliceDown'
        slices:15, // Для slice animations
        boxCols: 8, // Для box animations
        boxRows: 4, // Для box animations
        animSpeed:600, // Скорость смены слайдов
        pauseTime:3000, // Время показа одного слайда
        startSlide:0, // Настройка запуска Slide (0 index)
        directionNav:true, // Использование навигации Вперед, Назад
        directionNavHide:true, // Показывать только при наведении мыши
        controlNav:true, // 1,2,3... навигация
        controlNavThumbs:false, // Использовать миниатюры для навигации
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Использовать стрелки Влево и Вправо
        pauseOnHover:true, // Остановка навигации при наведении
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Прозрачность описания
        prevText: 'Назад', // Назад directionNav текст
        nextText: 'Вперед', // Вперед directionNav текст
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
    </script> 
<?php } ?>
