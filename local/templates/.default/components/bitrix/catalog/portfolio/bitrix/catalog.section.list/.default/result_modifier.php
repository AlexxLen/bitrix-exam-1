<?

B_PROLOG_INCLUDED === true || die();

foreach ($arResult['SECTIONS'] as $key => $arSection)
{
	$img = CFile::resizeImageGet($arSection['PICTURE'], ['width' => 574, 'height' => 431], BX_RESIZE_IMAGE_EXACT, true);

	$arResult['SECTIONS'][$key]['PICTURE']['SRC'] = $img['src'];
	$arResult['SECTIONS'][$key]['PICTURE']['WIDTH'] = $img['width'];
	$arResult['SECTIONS'][$key]['PICTURE']['HEIGHT'] = $img['height'];
}
		
?>