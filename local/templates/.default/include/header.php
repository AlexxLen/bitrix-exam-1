<?php

B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\AssetLocation;

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/include/boot.php';
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
	<? $APPLICATION->showHead(); ?>
	<title><?=$APPLICATION->showTitle();?></title>
    <?
    $asset = Asset::getInstance();

    $asset->addString('<meta content="width=device-width, initial-scale=1.0" name="viewport">', false, AssetLocation::BEFORE_CSS);

    // Favicons
    $asset->addString('<link href="' . DEFAULT_TEMPLATE_PATH . '/assets/img/favicon.png" rel="icon">', false, AssetLocation::BEFORE_CSS);
    $asset->addString('<link href="' . DEFAULT_TEMPLATE_PATH . '/assets/img/apple-touch-icon.png" rel="apple-touch-icon">', false, AssetLocation::BEFORE_CSS);

    // Vendor CSS Files
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/aos/aos.css');

    // Main CSS File
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/main.css');

    // Vendor JS Files
    $asset->addJs(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false, AssetLocation::BODY_END);
    $asset->addJs(DEFAULT_TEMPLATE_PATH .'/assets/vendor/aos/aos.js', false, AssetLocation::BODY_END);

	// Main JS File
    $asset->addJs(DEFAULT_TEMPLATE_PATH. '/assets/js/main.js', false, AssetLocation::BODY_END);
    ?>
</head>

<body class="scrolled">
	<div id="panel"><?$APPLICATION->showPanel();?></div>
	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="<?=SITE_DIR?>" class="logo d-flex align-items-center">
				<h1 class="sitename"><?=Loc::getMessage('HEADER_TITLE');?></h1>
			</a>
			<nav id="navmenu" class="navmenu">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu", 
					"top", 
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "3",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "Y",
					)
				);?>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>
		</div>
	</header>

	<main class="main">