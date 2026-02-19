<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<!-- <nav id="navmenu" class="navmenu">
	<ul>
		<li><a href="#">Главная</a></li>
		<li><a href="#">Пункт 1</a></li>
		<li><a href="#">Пункт 1</a></li>
		<li><a href="#">Пункт 3</a></li>
		<li><a href="#">Пункт 4</a></li>
		<li class="dropdown">
			<a href="#"><span>Пункт 5 с подменю</span>
				<i class="bi bi-chevron-down toggle-dropdown"></i>
			</a>
			<ul>
				<li><a href="#">Пункт 1</a></li>
				<li class="dropdown"><a href="#"><span>Пункт 2 с подменю</span> <i
							class="bi bi-chevron-down toggle-dropdown"></i></a>
					<ul>
						<li><a href="#">Пункт 1</a></li>
						<li><a href="#">Пункт 2</a></li>
						<li><a href="#">Пункт 3</a></li>
					</ul>
				</li>
				<li><a href="#">Пункт 2</a></li>
				<li><a href="#">Пункт 3</a></li>
				<li><a href="#">Пункт 4</a></li>
			</ul>
		</li>
		<li><a href="#">Пункт 6</a></li>
	</ul>
	<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav> -->


<?if (!empty($arResult)):?>
<nav id="navmenu" class="navmenu">
	<ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="dropdown">
				<a href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
					<i class="bi bi-chevron-down toggle-dropdown"></i>
				</a>
				<ul>
		<?else:?>
			<li class="dropdown">
				<a href="<?=$arItem["LINK"]?>">
				<span><?=$arItem["TEXT"]?></span>
					<i class="bi bi-chevron-down toggle-dropdown"></i>
				</a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li>
					<a href="<?=$arItem["LINK"]?>">
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?>
				</a>
			</li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1):?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

	</ul>
	<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
<?endif?>