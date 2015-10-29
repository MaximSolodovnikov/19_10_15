<table id="gallery" cellpadding="0" cellspacing="0" border="0" align="left">
        <tr>
            <td valign="top">
                <?php foreach($img as $item): ?>
                    <a href="<?=base_url();?>images/gallery/<?=$item['img'];?>" ><img src="<?=base_url();?>images/gallery/<?=$item['img'];?>" /></a>
                <?php endforeach; ?>
            </td>
        </tr>
 </table>