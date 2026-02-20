<?php
B_PROLOG_INCLUDED === true || die(); 
?>

<?php if(!empty($arResult)): ?>
	<div class="services-list">
		<?php foreach ($arResult as $arItem): ?>
			<a href="<?=$arItem['LINK']?>" <?=$arItem['SELECTED'] ? 'class="active"' : ''?>>
				<i class="bi <?=$arItem['PARAMS']['menu_ico'] ?? 'bi-arrow-right-circle'?>"></i>
				<span><?=$arItem['TEXT']?></span>
			</a>
		<?php endforeach; ?>
	</div>
<?php endif; ?>