<?php
B_PROLOG_INCLUDED === true || die(); 
?>

<?php if(!empty($arResult)): ?>
<div class="service-box">
	<div class="services-list">
		<?php foreach ($arResult as $arItem): ?>
			<a href="<?=$arItem['LINK']?>" class="<?=$arItem['SELECTED'] ? 'active' : ''?>">
				<i class="bi <?=isset($arItem['PARAMS']['menu_ico']) ? $arItem['PARAMS']['menu_ico'] : 'bi-arrow-right-circle'?>"></i>
				<span><?=$arItem['TEXT']?></span>
			</a>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>