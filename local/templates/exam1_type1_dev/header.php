<?php

B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Application;

require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

$request = Application::getInstance()->getContext()->getRequest();
$isMainPage = $request->getRequestedPageDirectory() === '/';

?>

<?php if (!$isMainPage) : ?>
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1><?=$APPLICATION->showTitle(false);?></h1>
        <p><?=$APPLICATION->showProperty('page_text_under_title')?></p>
        <nav class="breadcrumbs">
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb", 
                "bc_dev", 
                array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0",
                    "COMPONENT_TEMPLATE" => "bc_dev"
                ),
                false
            );?>
        </nav>
    </div>
</div>
<!-- End Page Title -->
<?php endif; ?>