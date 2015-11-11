<script type="text/javascript">
   $(function() {
        $('a[rel=lightbox]').lightBox();
    });
</script>

<table id="gallery" cellpadding="0" cellspacing="0" border="0" align="left">
        <tr>
            <td valign="top">
                <?php foreach($img as $item): ?>
                    <a href="<?=base_url();?>images/gallery/<?=$item['img'];?>" data-lightbox="image" >
                        <img src="<?=base_url();?>images/thumbs/<?=$item['thumbs'];?>" />
                    </a>
                <?php endforeach; ?>
            </td>
        </tr>
 </table>

<script src="<?=base_url();?>js/lightbox.js"></script>