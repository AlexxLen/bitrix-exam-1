<?php

use Bitrix\Main\Application;

define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

$request = Application::getInstance()->getContext()->getRequest();
$isMainPage = $request->getRequestedPageDirectory() === '/';