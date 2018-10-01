<!-- Уведомление об успешной отправке в базу данных -->
<?php if (@$resultSuccess != '') { ?>
<div class="notify notify--info mb-20">
    <?=$resultSuccess?>
</div>
<?php } 
        if (@$resultInfo != '') { ?>
<div class="notify notify--error mb-20">
    <?=$resultInfo?>
</div>
<?php } 	
        if (@$resultError != '') { ?>
<div class="notify notify--error mb-20">
    <?=$resultError?>
</div>
<?php } ?>