<?php

B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;

require_once __DIR__ . '/boot.php';

?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <?php
    $APPLICATION->showHead();
    
    $asset = Asset::getInstance();

    $asset->addString('<meta content="width=device-width, initial-scale=1.0" name="viewport">');

    // Favicons
    $asset->addString('<link href="' . DEFAULT_TEMPLATE_PATH . '/assets/img/favicon.png" rel="icon">');
    $asset->addString('<link href="' . DEFAULT_TEMPLATE_PATH . '/assets/img/apple-touch-icon.png" rel="apple-touch-icon">');

    // Vendor CSS Files
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/vendor/aos/aos.css');

    // Main CSS File
    $asset->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/main.css');

    // Vendor JS Files
    $asset->addJs(DEFAULT_TEMPLATE_PATH . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
    $asset->addJs(DEFAULT_TEMPLATE_PATH .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
    $asset->addJs(DEFAULT_TEMPLATE_PATH .'/assets/vendor/aos/aos.js');

	// Main JS File
    $asset->addJs(DEFAULT_TEMPLATE_PATH. '/assets/js/main.js');
    ?>
	<title><?=$APPLICATION->showTitle();?></title>
</head>

<body class="scrolled">
	<div id="panel">
		<?$APPLICATION->showPanel();?>
	</div>

	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="<?=SITE_DIR?>" class="logo d-flex align-items-center">
				<h1 class="sitename"><?=Loc::getMessage('HEADER_TITLE');?></h1>
			</a>

			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
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
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>
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

		</div>
	</header>

	<main class="main">