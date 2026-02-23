<?php

B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
  <?$APPLICATION->showHead();?>
  <title><?$APPLICATION->showTitle();?></title>
  <?
  $asset = Asset::getInstance();

  $asset->addString('<meta content="width=device-width, initial-scale=1.0" name="viewport">', false, AssetLocation::BEFORE_CSS);

  // Favicons
  $asset->addString('<link href="' . SITE_TEMPLATE_PATH . '/assets/img/favicon.png" rel="icon">', false, AssetLocation::BEFORE_CSS);

  // Vendor CSS Files
  $asset->addCss(SITE_TEMPLATE_PATH . '/assets/vendor/bootstrap/css/bootstrap.min.css');
  $asset->addCss(SITE_TEMPLATE_PATH . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');

  // Template Main CSS File
  $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');

  // Vendor JS Files
  $asset->addJs(SITE_TEMPLATE_PATH . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false, AssetLocation::BODY_END);

  // Template Main JS File
  $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js', false, AssetLocation::BODY_END);
  ?>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Ivanov</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Ivanov</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.html">
                <i class="bi bi-person"></i>
                <span>Мой профиль</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <div class="col-12 mb-3 mt-3 d-flex justify-content-center">
                <button 
                  class="btn btn-secondary btn-sm"
                  type="submit"
                  name="logout_butt"
                  value="Выйти"   
                >
                  Выйти
                </button>
              </div>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.html">
          <i class="bi bi-grid"></i>
          <span>Дашборд</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#main-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Основные</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="main-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Отчеты</span>
            </a>
          </li>
          <li>
            <a href="tables.html">
              <i class="bi bi-circle"></i><span>Данные</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#add-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-files"></i><span>Дополнительные</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="add-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Базы</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Информация</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sample-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Пример раздела</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sample-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
        </ul>        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.html">
          <i class="bi bi-person"></i>
          <span>Профиль</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link " href="blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Пустая страница</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1><?$APPLICATION->showTitle(false)?></h1>
    </div><!-- End Page Title -->

    <section class="section <?$APPLICATION->showProperty('page_css_class')?>">