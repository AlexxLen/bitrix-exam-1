<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

use Bitrix\Main\Localization\Loc;

?>

<div class="footer-search">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<h4><?=Loc::getMessage('SEARCH_FORM_TITLE');?></h4>
				<form action="#" method="<?=$arResult["FORM_ACTION"]?>">
					<div class="search-form">
						<input class="input-seach" type="text" name="q">
						<input class="button-seach" name="s" type="submit" value="<?=Loc::getMessage('SEARCH_FORM_BUTTON');?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>