<? 

B_PROLOG_INCLUDED === true || die();

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $img = CFile::resizeImageGet($arItem['DETAIL_PICTURE'], ['width' => 416, 'height' => 416], BX_RESIZE_IMAGE_EXACT, true);

    $arResult['ITEMS'][$key]['DETAIL_PICTURE']['SRC'] = $img['src'];
	$arResult['ITEMS'][$key]['DETAIL_PICTURE']['WIDTH'] = $img['width'];
	$arResult['ITEMS'][$key]['DETAIL_PICTURE']['HEIGHT'] = $img['height'];
}

